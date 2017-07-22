<?php

namespace App\Http\Controllers\Back;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller ;
use DB;
use App\Http\Requests\MenuValidate;
use App\Models\category;
use App\Models\menu;
use Route;
use stdClass ;
class KidMenuController extends Controller
{
    public $route = 'admin/kid' ;
    public $view = 'admin.menu.beef' ;
    public $controllerName = 'เมนู kid menu (เมนูเด็ก) ' ;
    public $categoryId = 6 ;
    public $cntImg = 5 ;
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
           
            $tables = category::find($this->categoryId)->where('name_th', 'like', '%'.$search.'%')
                ->orWhere('name_en', 'like', '%'.$search.'%')
                ->menu()
                ->orderBy($sortBy,$sortType)
                ->paginate(PAGINATE);
        }else{
            $tables =  category::find($this->categoryId)->menu()->orderBy($sortBy,$sortType)->paginate(PAGINATE) ;
        }
        $data['tables'] = $tables;
        $data['search'] = $search;
        $data['sortBy'] = $sortBy;
        $data['sortType'] = $sortType;
        $data['sortNextType'] = $sortNextType;
        $data['categoryId'] = $this->categoryId;
       
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
        $data['data'] = category::find($this->categoryId) ;
         $data['cntImg'] = $this->cntImg ;
        return view($this->view.'.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuValidate $request)
    {
         $post = self::fileUpload($request);
        if(!$post['result']){
            return redirect()->to($this->getRedirectUrl())
                    ->withInput($request->input())
                    ->withErrors($post['error'], $this->errorBag() );
        }
        menu::where('category_id',$this->categoryId)->delete();
        for ($i=1 ; $i<=$this->cntImg ; $i++){
            $o['category_id'] = $this->categoryId ;
            $o['img_th'] =isset($post['img_th_'.$i]) ? $post['img_th_'.$i] : null ;
            // dd($o['img_th']);
            $o['img_en'] = isset($post['img_en_'.$i]) ? $post['img_en_'.$i] : null ;
             // dd($o['img_en']);
            $o['name_th'] = isset($post['name_img_th_'.$i]) ? $post['name_img_th_'.$i] : null ;
            $o['name_en'] = isset($post['name_img_en_'.$i]) ? $post['name_img_en_'.$i] : null ;
            menu::create($o);
        }
        $c['thumbnail_th'] = isset($post['thumbnail_th']) ? $post['thumbnail_th'] : null ; 
        $c['thumbnail_en'] = isset($post['thumbnail_en']) ? $post['thumbnail_en'] : null ;
        $c['status'] = 1 ;
        $db = category::find($this->categoryId)->update($c) ;
        return redirect($this->route);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $data['title'] = $this->controllerName.' : '.$category->name_th ;
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
    public function edit($id)
    {
        $data['title'] = 'แก้ไข '.$this->controllerName ;
        $data['route'] = $this->route ;
        // $category = category::find($this->categoryId);
        $data['data'] = category::find($this->categoryId) ;
        $data['subdata'] = category::find($this->categoryId)->menu()->orderBy('id','asc')->get() ;
        $data['edit'] = true ;
         $data['cntImg'] = $this->cntImg ;
        return view($this->view.'.create',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuValidate $request, $id)
    {
        $post = self::fileUpload($request);
        if(!$post['result']){
            return redirect()->to($this->getRedirectUrl())
                    ->withInput($request->input())
                    ->withErrors($post['error'], $this->errorBag() );
        }
        menu::where('category_id',$this->categoryId)->delete();
        for ($i=1 ; $i<=$this->cntImg ; $i++){
            $o['category_id'] = $this->categoryId ;
            $o['img_th'] =isset($post['img_th_'.$i]) ? $post['img_th_'.$i] : null ;
            $o['img_en'] = isset($post['img_en_'.$i]) ? $post['img_en_'.$i] : null ;
            $o['name_th'] = isset($post['name_img_th_'.$i]) ? $post['name_img_th_'.$i] : null ;
            $o['name_en'] = isset($post['name_img_en_'.$i]) ? $post['name_img_en_'.$i] : null ;
            menu::create($o);
        }
        $c['thumbnail_th'] = isset($post['thumbnail_th']) ? $post['thumbnail_th'] : null ; 
        $c['thumbnail_en'] = isset($post['thumbnail_en']) ? $post['thumbnail_en'] : null ;
        $c['name_th'] = isset($post['name_th']) ? $post['name_th'] : null ;
        $c['name_en'] = isset($post['name_en']) ? $post['name_en'] : null ;
        $c['status'] = 1 ;
        $db = category::find($this->categoryId)->update($c) ;

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
        category::find($id)->delete();
        session()->flash('message','Delete Successfully');
        return redirect($this->route);
    }

    private function fileUpload($request){
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
        for($th =1 ; $th<=$this->cntImg ;$th++){
            $upload = uploadfile($request,'img_th_'.$th) ;
            if(!$upload['result']){
               return $upload ;
            }
            if(isset($upload['imagePath'])){
                $post['img_th_'.$th] = $upload['imagePath'] ;
            }
        }
        for($en =1 ; $en<=$this->cntImg ;$en++){
            $upload = uploadfile($request,'img_en_'.$en) ;
            if(!$upload['result']){
               return $upload ;
            }
            if(isset($upload['imagePath'])){
                $post['img_en_'.$en] = $upload['imagePath'] ;
            }
        }
        $post['result'] = true ;
        return $post ;
    } 
    

}
