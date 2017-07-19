<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\HealthTipValidate;
use App\Models\release;
use App\Models\releaseimages;
use Route;
use stdClass ;
class ReleaseController extends Controller
{
    public $route = 'admin/release' ;
    public $controllerName = 'Release' ;
    public $view = 'admin.release' ;

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
            $tables = release::where('name_th', 'like', '%'.$search.'%')
                ->orWhere('name_en', 'like', '%'.$search.'%')
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
    public function store(HealthTipValidate $request)
    {
        $post = self::fileUpload($request);
        $h = release::create($post);
        if(is_array($post['img_aside'])){
            foreach ($post['img_aside'] as $key => $v) {
                $img['release_id']  =  $h->id ;
                $img['image'] = $v;
                releaseimages::create($img);
            }
        }else{
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
        $post = self::fileUpload($request,true);
        $db = release::find($id)->update($post) ;
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

    private function fileUpload($request,$update=false){
        $post = $request->all();
        $upload = uploadfile($request,'img_aside') ;
        if($upload['result']){
            $post['img_aside'] = $upload['imagePath'] ;
        }

        if(!isset($post['thumbnail_th'])){
            $post['thumbnail_th'] = null;
        }
        if(!isset($post['thumbnail_en'])){
            $post['thumbnail_en'] = null;
        }
        if($update){
            if (isset($post['hid_thumbnail_th'])){
                $post['thumbnail_th'] = $post['hid_thumbnail_th'] ;
            }
            if (isset($post['hid_thumbnail_en'])){
                $post['thumbnail_en'] = $post['hid_thumbnail_en'] ;
            }
        }
        $upload = uploadfile($request,'thumbnail_th') ;
        if($upload['result']){
            $post['thumbnail_th'] = $upload['imagePath'] ;
        }
        $upload = uploadfile($request,'thumbnail_en') ;
        if($upload['result']){
            $post['thumbnail_en'] = $upload['imagePath'] ;
        }
        return $post ;
    } 
    

}