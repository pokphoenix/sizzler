<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\FormValidate;
use App\Models\mediaCategory;
use Route;
use stdClass;
class MediaCategoryController extends Controller
{
    public $route = 'admin/media-category' ;
    public $controllerName = 'รายการหมวดหมู่มีเดีย' ;

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
            $tables = mediaCategory::where('name_th', 'like', '%'.$search.'%')
                ->orWhere('name_en', 'like', '%'.$search.'%')
                ->orderBy($sortBy,$sortType)
                ->paginate(PAGINATE);
        }else{
            $tables =  mediaCategory::orderBy($sortBy,$sortType)->paginate(PAGINATE) ;
        }
        $data['tables'] = $tables;
        $data['search'] = $search;
        $data['sortBy'] = $sortBy;
        $data['sortType'] = $sortType;
        $data['sortNextType'] = $sortNextType;
       
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
        mediaCategory::create($post);
        return redirect($this->route);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(mediaCategory $mediaCategory)
    {
        $data['title'] = $this->controllerName.' : '.$mediaCategory->name_th ;
        $data['route'] = $this->route ;
        $data['data'] = $mediaCategory;
        
       return view($this->route.'.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(mediaCategory $mediaCategory)
    {
        $data['title'] = 'แก้ไข '.$this->controllerName ;
        $data['route'] = $this->route ;
        $data['data'] = $mediaCategory ;
        $data['edit'] = true ;
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
        $post = self::fileUpload($request,true);
        // if ($post['position']==1){
        //     // $post['position'] = 999;
        // }
        $db = mediaCategory::find($id)->update($post) ;
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
        mediaCategory::find($id)->delete();
        session()->flash('message','Delete Successfully');
        return redirect($this->route);
    }


    public function position(Request $request)
    {   
        $data['title'] = 'จัดเรียง '.$this->controllerName ;
        $tables = mediaCategory::where('position','<>',0)->orderBy('position','asc')->paginate(20) ;
        $data['tables'] = $tables;
        $data['baseRoute'] = $this->route;
        return view('admin.category.position',$data);
    }

    public function positionStore(Request $request)
    {   
        $post = $request->all();
        foreach($post['fromdata'] as $f){
            $db = mediaCategory::find($f['id'])->update(['position'=>$f['position']]) ;
        }
        $result['result']= true;
        session()->flash('message','Updated Successfully');
        return $result ;
    }

    private function fileUpload($request,$update=false){
        $post = $request->all();
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
