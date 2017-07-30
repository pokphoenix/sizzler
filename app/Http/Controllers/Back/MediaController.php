<?php

namespace App\Http\Controllers\Back;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller ;
use DB;
use App\Http\Requests\FormValidate;
use App\Models\media;
use App\Models\mediaCategory;
use Route;
use stdClass;
use Auth;
class MediaController extends Controller
{
    public $route = 'admin/media' ;
    public $controllerName = 'รายการมีเดีย' ;

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
            $tables = media::where('name_th', 'like', '%'.$search.'%')
                ->orWhere('name_en', 'like', '%'.$search.'%')
                ->orderBy($sortBy,$sortType)
                ->paginate(PAGINATE);
        }else{
            $tables =  media::orderBy($sortBy,$sortType)->paginate(PAGINATE) ;
        }
        $data['tables'] = $tables;
        $data['search'] = $search;
        $data['sortBy'] = $sortBy;
        $data['sortType'] = $sortType;
        $data['sortNextType'] = $sortNextType;
        $data['auth'] = Auth::user()->isAdmin() ;
        return view($this->route.'.index',$data);
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

        $category = mediaCategory::all();
        $data['categorys'] = $category ;

        $o = new stdClass();
        $o->position =  999 ;
        $data['data'] =  $o ;
        return view($this->route.'.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormValidate $request)
    {
         $post = self::fileUpload($request);
        if(!$post['result']){
            return redirectBack($post['error'],$this->errorBag(),$this->getRedirectUrl(),$request->input());
        }
        media::create($post);
        return redirectFlash('เพิ่มรายการ สำเร็จ',$this->route);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(media $data)
    {
        $data['title'] = $this->controllerName.' : '.$menu->name_th ;
        $data['route'] = $this->route ;
        $data['data'] = $menu;
        
       return view($this->route.'.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'แก้ไข '.$this->controllerName ;
        $data['route'] = $this->route ;

        $media = media::find($id);
        $data['data'] = $media ;
        $data['edit'] = true ;

        $category = mediaCategory::all();
        $data['categorys'] = $category ;

        return view($this->route.'.create',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormValidate $request, $id)
    {
        $post = self::fileUpload($request);
        if(!$post['result']){
            return redirectBack($post['error'],$this->errorBag(),$this->getRedirectUrl(),$request->input());
        }
        if(!$post['status']){
            $cntStatus = media::where('status',1)->count() ;
            if ($cntStatus<=3){
                return redirectBack('ไม่สามารถปิดรายการนี้ได้ เนื่องจาก จำนวนการแสดงผลหน้าเว็บต้องไม่น้อยกว่า 3 รูปค่ะ',$this->errorBag(),$this->getRedirectUrl(),$request->input());
            }
        }
        $db = media::find($id)->update($post) ;
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
        $cntStatus = media::where('status',1)->count() ;
        if ($cntStatus<=3){
            return redirectFlash('ไม่สามารถลบรายการนี้ได้ เนื่องจาก จำนวนการแสดงผลหน้าเว็บต้องไม่น้อยกว่า 3 รูปค่ะ',$this->route,'error');
        }
        media::find($id)->delete();
        return redirectFlash('ลบรายการ สำเร็จ',$this->route);
    }


    public function position(Request $request)
    {   
        $data['title'] = 'จัดเรียง '.$this->controllerName ;
        $tables = media::where('position','<>',0)->orderBy('position','asc')->paginate(20) ;
        $data['tables'] = $tables;
        $data['baseRoute'] = $this->route;
        return view('admin.category.position',$data);
    }

    public function positionStore(Request $request)
    {   
        $post = $request->all();
        foreach($post['fromdata'] as $f){
            $db = media::find($f['id'])->update(['position'=>$f['position']]) ;
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
            $cntStatus = media::where('status',1)->count() ;
            if ($cntStatus<=3){
                return redirectFlash('ไม่สามารถปิดรายการนี้ได้ เนื่องจาก จำนวนการแสดงผลหน้าเว็บต้องไม่น้อยกว่า 3 รูปค่ะ',$this->route,'error');
            }
        }
        $db = media::find($id)->update(['status'=>$status ]) ;
       return redirectFlash($statusTxt.' Successfully',$this->route);
    }

    private function fileUpload($request,$update=false){
        $post = $request->all();
        $upload = uploadfile($request,'thumbnail_th') ;
        if(!$upload['result']){
           return $upload ;
        }
        if(isset($upload['imagePath'])){
            $post['thumbnail_th'] = $upload['imagePath'] ;
        }
        $upload = uploadfile($request,'thumbnail_en') ;
        if(!$upload['result']){
           return $upload ;
        }
        if(isset($upload['imagePath'])){
            $post['thumbnail_en'] = $upload['imagePath'] ;
        }
        $post['result'] = true ;
        return $post ;
    } 
    

}
