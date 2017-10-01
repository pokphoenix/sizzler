<?php

namespace App\Http\Controllers\Back;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller ;
use DB;
use App\Http\Requests\FormValidate;
use App\Models\banner;
use Route;
use stdClass ;
use Auth;
class bannerController extends Controller
{
    public $route = 'admin/banner' ;
    public $controllerName = 'แบนเนอ home' ;
    public $view = "admin.banner";
    private $img_cnt = 2 ;
    public $resize ;

    public function __construct(){
        $resize[1] = ['w'=>452,'h'=>286];
        $resize[2] = ['w'=>528,'h'=>286];
        $this->resize = $resize ;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = $this->controllerName ;
        $data['route'] = $this->route ;
        // $url = $request->fullUrl();
        $sortBy = $request->input('sortby', 'created_at');
        $sortType = $request->input('type', 'desc'); 
        $search = $request->input('search');
        $sortNextType = ($sortType=='desc') ? 'asc' : 'desc' ;
        if(isset($search)){
            $tables = banner::where('name_img_th_1', 'like', '%'.$search.'%')
                ->orWhere('name_img_en_1', 'like', '%'.$search.'%')
                ->orderBy($sortBy,$sortType)
                ->paginate(PAGINATE);
        }else{
            $tables =  banner::orderBy($sortBy,$sortType)->paginate(PAGINATE) ;
        }

        $data['tables'] = $tables;
        $data['search'] = $search;
        $data['sortBy'] = $sortBy;
        $data['sortType'] = $sortType;
        $data['sortNextType'] = $sortNextType;
        $data['auth'] = Auth::user()->isAdmin() ;
        return view($this->view.'.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'สร้าง '.$this->controllerName ;
        $data['route'] = $this->route ;

        $o = new stdClass();
        $o->position =  999 ;
        $data['data'] =  $o ;
        return view($this->view.'.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $post = self::fileUpload($request);
        if(!$post['result']){
            return redirectBack($post['error'],$this->errorBag(),$this->getRedirectUrl(),$request->input());
        }
        banner::create($post);
        return redirectFlash('เพิ่มรายการ สำเร็จ',$this->route);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(banner $banner)
    {
        $data['title'] = $this->controllerName.' : '.$banner->name_th ;
        $data['data'] = $category;
        $data['route'] = $this->route;
       return view($this->view.'.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(banner $banner)
    {
        $data['title'] = 'แก้ไข '.$this->controllerName ;
        $data['route'] = $this->route ;
        $data['data'] = $banner ;
        $data['edit'] = true ;
        return view($this->view.'.create',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = self::fileUpload($request);
        if(!$post['result']){
            return redirectBack($post['error'],$this->errorBag(),$this->getRedirectUrl(),$request->input());
        }
         if(!$post['status']){
            $cntStatus = banner::where('status',1)->count() ;
            if ($cntStatus<=1){
                return redirectBack('ไม่สามารถปิดรายการนี้ได้ เนื่องจาก จำนวนการแสดงผลหน้าเว็บต้องไม่น้อยกว่า 1 รูปค่ะ',$this->errorBag(),$this->getRedirectUrl(),$request->input());

            }
        }

        $db = banner::find($id)->update($post) ;
       return redirectFlash('อัพเดทรายการ สำเร็จ',$this->route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cntStatus = banner::where('status',1)->count() ;
        if ($cntStatus<=1){
            return redirectFlash('ไม่สามารถลบรายการนี้ได้ เนื่องจาก จำนวนการแสดงผลหน้าเว็บต้องไม่น้อยกว่า 1 รูปค่ะ',$this->route,'error');
        }

        banner::find($id)->delete();
        return redirectFlash('ลบรายการ สำเร็จ',$this->route);
    }


    public function position(Request $request)
    {   
        $data['title'] = 'จัดเรียง '.$this->controllerName ;
        $tables = banner::where('position','<>',0)->orderBy('position','asc')->paginate(20) ;
        $data['tables'] = $tables;
        $data['baseRoute'] = $this->route;
        return view('admin.slider.position',$data);
    }

    public function positionStore(Request $request)
    {   
        $post = $request->all();
        foreach($post['fromdata'] as $f){
            $db = banner::find($f['id'])->update(['position'=>$f['position']]) ;
        }
        $result['result']= true;
        session()->flash('message','Updated Successfully');
        return $result ;
    }
    public function publicStore($id,Request $request)
    {   
        $post = $request->all();
        $status = ($post['status']) ? 0 : 1  ;
        $statusTxt = ($post['status']) ? 'Offline' : 'Online'  ;
        if(!$status){
            $cntStatus = banner::where('status',1)->count() ;
            if ($cntStatus<=1){
                 return redirectFlash('ไม่สามารถปิดรายการนี้ได้ เนื่องจาก จำนวนการแสดงผลหน้าเว็บต้องไม่น้อยกว่า 1 รูปค่ะ',$this->route,'error');
            }
        }

        $db = banner::find($id)->update(['status'=>$status ]) ;
       return redirectFlash($statusTxt.' Successfully',$this->route);
    }

    private function fileUpload($request){
        $post = $request->all();
        for($i = 1 ; $i <= $this->img_cnt ; $i++ ){
            $upload = uploadfile($request,'img_th_'.$i,$this->resize[$i]) ;
            if(!$upload['result']){
               return $upload ;
            }
            if(isset($upload['imagePath'])){
                $post['img_th_'.$i] = $upload['imagePath'] ;
            }
            $upload = uploadfile($request,'img_en_'.$i,$this->resize[$i]) ;
            if(!$upload['result']){
               return $upload ;
            }
            if(isset($upload['imagePath'])){
                $post['img_en_'.$i] = $upload['imagePath'] ;
            }
        }
        $post['result'] = true ;
        return $post ;
    } 
    

}
