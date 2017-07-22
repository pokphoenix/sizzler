<?php

namespace App\Http\Controllers\Back;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller ;
use DB;
use App\Http\Requests\FormValidate;
use App\Models\banner;
use Route;
use stdClass ;
class bannerController extends Controller
{
    public $route = 'admin/banner' ;
    public $controllerName = 'แบนเนอ home' ;
    public $view = "admin.banner";

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
            $tables = banner::where('name_th', 'like', '%'.$search.'%')
                ->orWhere('name_en', 'like', '%'.$search.'%')
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
    public function store(FormValidate $request)
    {
         $post = self::fileUpload($request);
        if(!$post['result']){
            return redirect()->to($this->getRedirectUrl())
                    ->withInput($request->input())
                    ->withErrors($post['error'], $this->errorBag() );
        }
        category::create($post);
        return redirect($this->route);
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
    public function update(FormValidate $request, $id)
    {
        $post = self::fileUpload($request);
        if(!$post['result']){
            return redirect()->to($this->getRedirectUrl())
                    ->withInput($request->input())
                    ->withErrors($post['error'], $this->errorBag() );
        }
        // if ($post['position']==1){
        //     // $post['position'] = 999;
        // }
        $db = banner::find($id)->update($post) ;
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
        banner::find($id)->delete();
        session()->flash('message','Delete Successfully');
        return redirect($this->route);
    }


    public function position(Request $request)
    {   
        $data['title'] = 'จัดเรียง '.$this->controllerName ;
        $tables = banner::where('position','<>',0)->orderBy('position','asc')->paginate(20) ;
        $data['tables'] = $tables;
        $data['baseRoute'] = $this->route;
        return view('admin.category.position',$data);
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

    private function fileUpload($request){
        $post = $request->all();
        $upload = uploadfile($request,'img_th') ;
        if(!$upload['result']){
           return $upload ;
        }
        if(isset($upload['imagePath'])){
            $post['img_th'] = $upload['imagePath'] ;
        }
        $upload = uploadfile($request,'img_en') ;
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
