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
use Auth;
class ChickenController extends Controller
{
    public $route = 'admin/chicken' ;
    public $view = 'admin.menu.chicken' ;
    public $controllerName = 'เมนู chicken (ไก่) ' ;
    public $categoryId = 2 ;
    public $cntImg = 4 ;
    public $resize ;

    public function __construct(){
        $resize[0] = ['w'=>454,'h'=>114]; 
        $resize[1] = ['w'=>228,'h'=>228]; 
        $resize[2] = ['w'=>226,'h'=>228]; 
        $resize[3] = ['w'=>526,'h'=>526]; 
        $resize[4] = ['w'=>454,'h'=>184];
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
        $data['data'] = category::find($this->categoryId) ;
         $data['cntImg'] = $this->cntImg ;
          $data['resize'] = $this->resize ;
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
            return redirectBack($post['error'],$this->errorBag(),$this->getRedirectUrl(),$request->input());
        }
        menu::where('category_id',$this->categoryId)->delete();
        for ($i=1 ; $i<= $this->cntImg ; $i++){
            $o['category_id'] = $this->categoryId ;
            $o['img_th'] = (isset($post['img_th_'.$i])) ? $post['img_th_'.$i] : ((isset($post['hid_img_th_'.$i])) ? $post['hid_img_th_'.$i] : null) ;
            $o['img_en'] = (isset($post['img_en_'.$i])) ? $post['img_en_'.$i] : ((isset($post['hid_img_en_'.$i])) ? $post['hid_img_en_'.$i] : null)   ;
            $o['name_th'] = (isset($post['name_img_th_'.$i])) ? $post['name_img_th_'.$i] : null ;
            $o['name_en'] = (isset($post['name_img_en_'.$i])) ? $post['name_img_en_'.$i] : null ;
            menu::create($o);
        }
        $c['thumbnail_th'] = (isset($post['thumbnail_th'])) ? $post['thumbnail_th'] : ((isset($post['hid_thumbnail_th'])) ? $post['hid_thumbnail_th'] : null) ; 
        $c['thumbnail_en'] = (isset($post['thumbnail_en'])) ? $post['thumbnail_en'] : ((isset($post['hid_thumbnail_en'])) ? $post['hid_thumbnail_en'] : null) ; 
        $c['name_th'] = isset($post['name_th']) ? $post['name_th'] : null ;
        $c['name_en'] = isset($post['name_en']) ? $post['name_en'] : null ;
        $c['status'] = 1 ;
        $db = category::find($this->categoryId)->update($c) ;
        return redirectFlash('เพิ่มรายการ สำเร็จ',$this->route);

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
    public function update(MenuValidate $request, $id)
    {
        $post = self::fileUpload($request);
        if(!$post['result']){
            return redirectBack($post['error'],$this->errorBag(),$this->getRedirectUrl(),$request->input());
        }
        menu::where('category_id',$this->categoryId)->delete();
        for ($i=1 ; $i<= $this->cntImg ; $i++){
            $o['category_id'] = $this->categoryId ;
            $o['img_th'] = (isset($post['img_th_'.$i])) ? $post['img_th_'.$i] : ((isset($post['hid_img_th_'.$i])) ? $post['hid_img_th_'.$i] : null) ;
            $o['img_en'] = (isset($post['img_en_'.$i])) ? $post['img_en_'.$i] : ((isset($post['hid_img_en_'.$i])) ? $post['hid_img_en_'.$i] : null)   ;
            $o['name_th'] = (isset($post['name_img_th_'.$i])) ? $post['name_img_th_'.$i] : null ;
            $o['name_en'] = (isset($post['name_img_en_'.$i])) ? $post['name_img_en_'.$i] : null ;
            menu::create($o);
        }
        $c['thumbnail_th'] = (isset($post['thumbnail_th'])) ? $post['thumbnail_th'] : ((isset($post['hid_thumbnail_th'])) ? $post['hid_thumbnail_th'] : null) ; 
        $c['thumbnail_en'] = (isset($post['thumbnail_en'])) ? $post['thumbnail_en'] : ((isset($post['hid_thumbnail_en'])) ? $post['hid_thumbnail_en'] : null) ; 
        $c['name_th'] = isset($post['name_th']) ? $post['name_th'] : null ;
        $c['name_en'] = isset($post['name_en']) ? $post['name_en'] : null ;
        $c['status'] = 1 ;
        $db = category::find($this->categoryId)->update($c) ;

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
        category::find($id)->delete();
        return redirectFlash('ลบรายการ สำเร็จ',$this->route);
    }

    private function fileUpload($request){
        $post = $request->all();
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
        for($th =1 ; $th<= $this->cntImg ;$th++){
            $upload = uploadfile($request,'img_th_'.$th,$this->resize[$th]) ;
            if(!$upload['result']){
               return $upload ;
            }
            if(isset($upload['imagePath'])){
                $post['img_th_'.$th] = $upload['imagePath'] ;
            }
        }
        for($en =1 ; $en<= $this->cntImg ;$en++){
            $upload = uploadfile($request,'img_en_'.$en,$this->resize[$en]) ;
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
