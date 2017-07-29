<?php

namespace App\Http\Controllers\Back;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller ;
use DB;
use App\Http\Requests\BannerValidate;
use App\Models\promotionSliderSub;
use Route;
use stdClass ;
use Auth;
class PromotionSliderSubController extends Controller
{
    public $route = 'admin/promotion-slider-sub' ;
    public $controllerName = 'โปรโมชั่น สไลด์กว้าง(บล็อคล่าง)' ;
    public $view = "admin.promotion-slider-sub";
    public $resize ;

    public function __construct(){
        $resize[0] = ['w'=>948,'h'=>380];
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
            $tables = promotionSliderSub::where('name_th', 'like', '%'.$search.'%')
                ->orWhere('name_en', 'like', '%'.$search.'%')
                ->orderBy($sortBy,$sortType)
                ->paginate(PAGINATE);
        }else{
            $tables =  promotionSliderSub::orderBy($sortBy,$sortType)->paginate(PAGINATE) ;
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
        $data['resize'] = $this->resize ;
        return view($this->view.'.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerValidate $request)
    {
         $post = self::fileUpload($request);
        if(!$post['result']){
            return redirect()->to($this->getRedirectUrl())
                    ->withInput($request->input())
                    ->withErrors($post['error'], $this->errorBag() );
        }
        promotionSliderSub::create($post);
        return redirect($this->route);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(promotionSliderSub $promotionSliderSub)
    {
        $data['title'] = $this->controllerName.' : '.$promotionSliderSub->name_th ;
        $data['data'] = $promotionSliderSub;
        $data['route'] = $this->route;
       return view($this->view.'.show',$data);
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
        $data['data'] = promotionSliderSub::find($id) ;
        $data['edit'] = true ;
        $data['resize'] = $this->resize ;
        return view($this->view.'.create',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerValidate $request, $id)
    {
        $post = self::fileUpload($request);
        if(!$post['result']){
            return redirect()->to($this->getRedirectUrl())
                    ->withInput($request->input())
                    ->withErrors($post['error'], $this->errorBag() );
        }
        if(!$post['status']){
            $cntStatus = promotionSliderSub::where('status',1)->count() ;
            if ($cntStatus<=1){
                return redirect()->to($this->getRedirectUrl())
                    ->withInput($request->input())
                    ->withErrors('ไม่สามารถปิดรายการนี้ได้ เนื่องจาก จำนวนการแสดงผลหน้าเว็บต้องไม่น้อยกว่า 1 รูปค่ะ', $this->errorBag() );
            }
        }
        $db = promotionSliderSub::find($id)->update($post) ;
        session()->flash('message','Updated Successfully');
        return redirect($this->route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cntStatus = promotionSliderSub::where('status',1)->count() ;
        if ($cntStatus<=1){
            session()->flash('error','ไม่สามารถลบรายการนี้ได้ เนื่องจาก จำนวนการแสดงผลหน้าเว็บต้องไม่น้อยกว่า 1 รูปค่ะ');
            return redirect($this->route);
        }
        promotionSliderSub::find($id)->delete();
        session()->flash('message','Delete Successfully');
        return redirect($this->route);
    }


    public function position(Request $request)
    {   
        $data['title'] = 'จัดเรียง '.$this->controllerName ;
        $tables = promotionSliderSub::where('position','<>',0)->orderBy('position','asc')->paginate(20) ;

        $data['tables'] = $tables;
        $data['baseRoute'] = $this->route;
        return view($this->view.'.position',$data);
    }

    public function positionStore(Request $request)
    {   
        $post = $request->all();
        foreach($post['fromdata'] as $f){
            $db = promotionSliderSub::find($f['id'])->update(['position'=>$f['position']]) ;
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
            $cntStatus = promotionSliderSub::where('status',1)->count() ;
            if ($cntStatus<=1){
                session()->flash('error','ไม่สามารถปิดรายการนี้ได้ เนื่องจาก จำนวนการแสดงผลหน้าเว็บต้องไม่น้อยกว่า 1 รูปค่ะ');
                return redirect($this->route);
            }
        }
        $db = promotionSliderSub::find($id)->update(['status'=>$status ]) ;
        session()->flash('message', $statusTxt.' Successfully');
        return redirect($this->route);
    }

    private function fileUpload($request){
        $post = $request->all();
        $upload = uploadfile($request,'img_th',$this->resize[0]) ;
        if(!$upload['result']){
           return $upload ;
        }
        if(isset($upload['imagePath'])){
            $post['img_th'] = $upload['imagePath'] ;
        }
        $upload = uploadfile($request,'img_en',$this->resize[0]) ;
        if(!$upload['result']){
           return $upload ;
        }
        if(isset($upload['imagePath'])){
            $post['img_en'] = $upload['imagePath'] ;
        }
        $post['result'] = true ;
        return $post ;
    } 
    

}
