<?php

namespace App\Http\Controllers\Back;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller ;
use DB;
use App\Http\Requests\HealthTipValidate;
use App\Models\release;
use App\Models\releaseimages;
use Route;
use stdClass ;
use Auth;
class ReleaseController extends Controller
{
    public $route = 'admin/release' ;
    public $controllerName = 'Release' ;
    public $view = 'admin.release' ;
    public $resize ;

    public function __construct(){
        $resize[0] = ['w'=>182,'h'=>128];
        $resize[1] = ['w'=>334,'h'=>224];
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
            $tables = release::where('title_th', 'like', '%'.$search.'%')
                ->orWhere('title_en', 'like', '%'.$search.'%')
                ->orderBy($sortBy,$sortType)
                ->paginate(PAGINATE);
        }else{
            $tables =  release::orderBy($sortBy,$sortType)->paginate(PAGINATE) ;
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
    public function store(HealthTipValidate $request)
    {
         $post = self::fileUpload($request);
        if(!$post['result']){
            return redirect()->to($this->getRedirectUrl())
                    ->withInput($request->input())
                    ->withErrors($post['error'], $this->errorBag() );
        }
        $h = release::create($post);
        if(is_array($post['img_aside'])){
            foreach ($post['img_aside'] as $key => $v) {
                $img['release_id']  =  $h->id ;
                $img['image'] = $v;
                releaseimages::create($img);
            }
        }elseif(isset($post['img_aside'])){
            $img['release_id']  = $id ;
            $img['image'] = $post['img_aside'] ;
            releaseimages::create($img);
        }
        return redirect($this->route);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(release $release)
    {
        $data['title'] = $this->controllerName.' : '.$release->name_th ;
        $data['data'] = $release;
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
        $release =  release::find($id) ;
        $data['data'] = $release ;
        $data['edit'] = true ;
        $data['aside'] = release::find($id)->releaseimages ;
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
    public function update(HealthTipValidate $request, $id)
    {
        $post = self::fileUpload($request);
        if(!$post['result']){
            return redirect()->to($this->getRedirectUrl())
                    ->withInput($request->input())
                    ->withErrors($post['error'], $this->errorBag() );
        }
        if(!$post['status']){
            $cntStatus = release::where('status',1)->count() ;
            if ($cntStatus<=4){
                return redirect()->to($this->getRedirectUrl())
                    ->withInput($request->input())
                    ->withErrors('ไม่สามารถปิดรายการนี้ได้ เนื่องจาก จำนวนการแสดงผลหน้าเว็บต้องไม่น้อยกว่า 4 รูปค่ะ', $this->errorBag() );
            }
        }
        $db = release::find($id)->update($post) ;
        if(isset($post['img_aside'])){
            if(is_array($post['img_aside'])){
                foreach ($post['img_aside'] as $key => $v) {
                    $img['release_id']  = $id ;
                    $img['image'] = $v;
                    releaseimages::create($img);
                }
            }else{
                $img['release_id']  = $id ;
                $img['image'] = $post['img_aside'] ;
                releaseimages::create($img);
            }
        }
        
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
        $cntStatus = release::where('status',1)->count() ;
        if ($cntStatus<=4){
            session()->flash('error','ไม่สามารถลบรายการนี้ได้ เนื่องจาก จำนวนการแสดงผลหน้าเว็บต้องไม่น้อยกว่า 4 รูปค่ะ');
            return redirect($this->route);
        }
        release::find($id)->delete();
        session()->flash('message','Delete Successfully');
        return redirect($this->route);
    } 
    public function deleteimage($id)
    {
        releaseimages::find($id)->delete();
        return json_encode(['result'=>true]);
    }


    public function position(Request $request)
    {   
        $data['title'] = 'จัดเรียง '.$this->controllerName ;
        $tables = release::where('position','<>',0)->orderBy('position','asc')->paginate(20) ;
        $data['tables'] = $tables;
        $data['baseRoute'] = $this->route;
        return view('admin.category.position',$data);
    }

    public function positionStore(Request $request)
    {   
        $post = $request->all();
        foreach($post['fromdata'] as $f){
            $db = release::find($f['id'])->update(['position'=>$f['position']]) ;
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
            $cntStatus = release::where('status',1)->count() ;
            if ($cntStatus<=4){
                session()->flash('error','ไม่สามารถปิดรายการนี้ได้ เนื่องจาก จำนวนการแสดงผลหน้าเว็บต้องไม่น้อยกว่า 4 รูปค่ะ');
                return redirect($this->route);
            }
        }
        $db = release::find($id)->update(['status'=>$status ]) ;
        session()->flash('message', $statusTxt.' Successfully');
        return redirect($this->route);
    }

    private function fileUpload($request){
        $post = $request->all();
        $upload = uploadfile($request,'img_aside',$this->resize[1]) ;
        if(!$upload['result']){
           return $upload ;
        }
        if(isset($upload['imagePath'])){
            $post['img_aside'] = $upload['imagePath'] ;
        }
        $upload = uploadfile($request,'thumbnail_th',$this->resize[0]) ;
        if(!$upload['result']){
           return $upload ;
        }
        if(isset($upload['imagePath'])){
            $post['thumbnail_th'] = $upload['imagePath'] ;
        }
        $upload = uploadfile($request,'thumbnail_en',$this->resize[0]) ;
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
