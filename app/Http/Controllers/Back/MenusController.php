<?php

namespace App\Http\Controllers\Back;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller ;
use DB;
use App\Http\Requests\MenuValidate;
use App\Models\menu;
use App\Models\menuDetail;
use App\Models\category;
use Route;
use stdClass;
use Auth;
class MenusController extends Controller
{
    public $route = 'admin/menu' ;
    public $view = 'admin.menu' ;
    public $controllerName = 'รายการเมนูอาหาร หมวด' ;
    public $cntImg ;
    public $resize ;
    public $navigateImg ;
    public $mainNavigateImg ;

    public function __construct(){
        $this->initResizeImage() ;
        $this->initCntImg() ;
        $this->initNavigatorImage() ;
        $this->initMainNavigatorImage() ;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   

    public function index(Request $request,$categoryId)
    {
        $data['title'] = $this->controllerName.$this->categoryName($categoryId) ;
        $data['route'] = $this->route.'/'.$categoryId ;
        // $url = $request->fullUrl();
        $sortBy = $request->input('sortby', 'created_at');
        $sortType = $request->input('type', 'desc'); 
        $search = $request->input('search');
        $sortNextType = ($sortType=='desc') ? 'asc' : 'desc' ;
        if(isset($search)){
            $tables = menu::where('category_id',$categoryId)
                ->where('title_th', 'like', '%'.$search.'%')
                ->orWhere('title_en', 'like', '%'.$search.'%')
                ->orderBy($sortBy,$sortType)
                ->paginate(PAGINATE);

            foreach ($tables as $key => $m) {
                $tables[$key]['images'] = menuDetail::where('menu_id',$m['id'])->get();
            }

        }else{
           
            $tables = menu::where('category_id',$categoryId)
            ->orderBy($sortBy,$sortType)->paginate(PAGINATE);

            foreach ($tables as $key => $m) {
                $tables[$key]['images'] = menuDetail::where('menu_id',$m['id'])->get();
            }
        }

        $data['tables'] = $tables;
        $data['search'] = $search;
        $data['sortBy'] = $sortBy;
        $data['sortType'] = $sortType;
        $data['sortNextType'] = $sortNextType;
        $data['auth'] = Auth::user()->isAdmin() ;
        $data['category_id'] = $categoryId ;


        $data['navigateImg'] = $this->mainNavigateImg[$categoryId+0] ;
        return view($this->route.'.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($categoryId)
    {
        $data['title'] = 'สร้าง '.$this->controllerName.$this->categoryName($categoryId) ;
        $data['route'] = $this->route.'/'.$categoryId ;

        $category = category::all();
        $data['categorys'] = $category ;
        $data['cntImg'] = $this->cntImg[$categoryId] ;
        $data['resize'] = $this->resize[$categoryId] ;
        $data['navigateImg'] = $this->navigateImg[$categoryId] ;
        $data['category_id'] = $categoryId ;
        $cat = $category->toArray() ;
        $index = array_search($categoryId,array_column($cat, 'id'));
        $categoryData = $cat[$index] ;

        $o = new stdClass() ;
        $o->status = 0 ;
        $o->thumbnail_th = $categoryData["thumbnail_th"] ;
        $o->thumbnail_en = $categoryData["thumbnail_en"]  ;
        $data['data'] = $o ;

        return view($this->route.'.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuValidate $request,$categoryId)
    {
        $post = self::fileUpload($request);
        if(!$post['result']){
            return redirectBack($post['error'],$this->errorBag(),$this->getRedirectUrl(),$request->input());
        }
        $c['thumbnail_th'] = (isset($post['thumbnail_th'])) ? $post['thumbnail_th'] : ((isset($post['hid_thumbnail_th'])) ? $post['hid_thumbnail_th'] : null) ; 
        $c['thumbnail_en'] = (isset($post['thumbnail_en'])) ? $post['thumbnail_en'] : ((isset($post['hid_thumbnail_en'])) ? $post['hid_thumbnail_en'] : null) ; 
        $c['title_th'] = isset($post['title_th']) ? $post['title_th'] : null ;
        $c['title_en'] = isset($post['title_en']) ? $post['title_en'] : null ;
        $c['short_desc_th'] = isset($post['short_desc_th']) ? $post['short_desc_th'] : null ;
        $c['short_desc_en'] = isset($post['short_desc_en']) ? $post['short_desc_en'] : null ;
        $c['price_th'] = isset($post['price_th']) ? $post['price_th'] : 0 ;
        $c['price_en'] = isset($post['price_en']) ? $post['price_en'] : 0 ;
        $c['img_name_th'] = isset($post['img_name_th']) ? $post['img_name_th'] : null ;
        $c['img_name_en'] = isset($post['img_name_en']) ? $post['img_name_en'] : null ;
        $c['status'] = isset($post['status']) ? $post['status'] : 0 ;
        $c['category_id'] = isset($post['category_id']) ? $post['category_id'] : 0 ;
       
        $cat['thumbnail_th'] = $c['thumbnail_th'] ; 
        $cat['thumbnail_en'] = $c['thumbnail_en'] ; 
       try {
            category::find($categoryId)->update($cat) ;
            $menu = menu::create($c) ;
            menuDetail::where('category_id',$post['category_id'])
            ->where('menu_id',$menu['id'])->delete();
        }
        catch (\Exception $e) {
            return redirectBack($e->getMessage(),$this->errorBag(),$this->getRedirectUrl(),$request->input());
        }
        for ($i=1 ; $i<= $this->cntImg[$categoryId] ; $i++){
            $o['category_id'] = $post['category_id'] ;
            $o['menu_id'] = $menu['id'] ;
            $o['img_th'] = (isset($post['img_th_'.$i])) ? $post['img_th_'.$i] : ((isset($post['hid_img_th_'.$i])) ? $post['hid_img_th_'.$i] : null) ;
            $o['img_en'] = (isset($post['img_en_'.$i])) ? $post['img_en_'.$i] : ((isset($post['hid_img_en_'.$i])) ? $post['hid_img_en_'.$i] : null)   ;
            $o['name_th'] = (isset($post['name_img_th_'.$i])) ? $post['name_img_th_'.$i] : null ;
            $o['name_en'] = (isset($post['name_img_en_'.$i])) ? $post['name_img_en_'.$i] : null ;

            $o['title_th'] = (isset($post['title_menu_th_'.$i])) ? $post['title_menu_th_'.$i] : null ; 
            $o['title_en'] = (isset($post['title_menu_en_'.$i])) ? $post['title_menu_en_'.$i] : null ;
           
            $o['price_th'] = (isset($post['price_th_'.$i])) ? $post['price_th_'.$i] : null ; 
            $o['price_en'] = (isset($post['price_en_'.$i])) ? $post['price_en_'.$i] : null ;

           
            try {
                menuDetail::create($o);
            }
            catch (\Exception $e) {
                return redirectBack($e->getMessage(),$this->errorBag(),$this->getRedirectUrl(),$request->input());
            }
        }

        return redirectFlash('เพิ่มรายการ สำเร็จ',$this->route.'/'.$categoryId);

    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($categoryId,$menuid)
    {
        $data['title'] = 'แก้ไข '.$this->controllerName.$this->categoryName($categoryId) ;
        $data['route'] = $this->route.'/'.$categoryId ;
        $category = category::all();
        $data['categorys'] = $category ;
        $data['category_id'] = $categoryId ;
        $menu = menu::find($menuid);
        $data['data'] = $menu ;
        $data['subdata'] = $menu->images;
        $data['edit'] = true ;
        $data['cntImg'] = $this->cntImg[$categoryId] ;
        $data['resize'] = $this->resize[$categoryId] ;
        $data['navigateImg'] = $this->navigateImg[$categoryId] ;
        return view($this->route.'.create',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuValidate $request, $categoryId,$menuId)
    {
        $post = self::fileUpload($request);
        if(!$post['result']){
            return redirectBack($post['error'],$this->errorBag(),$this->getRedirectUrl(),$request->input());
        }

        $c['thumbnail_th'] = (isset($post['thumbnail_th'])) ? $post['thumbnail_th'] : ((isset($post['hid_thumbnail_th'])) ? $post['hid_thumbnail_th'] : null) ; 
        $c['thumbnail_en'] = (isset($post['thumbnail_en'])) ? $post['thumbnail_en'] : ((isset($post['hid_thumbnail_en'])) ? $post['hid_thumbnail_en'] : null) ; 
        $c['title_th'] = isset($post['title_th']) ? $post['title_th'] : null ;
        $c['title_en'] = isset($post['title_en']) ? $post['title_en'] : null ;
        $c['short_desc_th'] = isset($post['short_desc_th']) ? $post['short_desc_th'] : null ;
        $c['short_desc_en'] = isset($post['short_desc_en']) ? $post['short_desc_en'] : null ;
        $c['price_th'] = isset($post['price_th']) ? $post['price_th'] : 0 ;
        $c['price_en'] = isset($post['price_en']) ? $post['price_en'] : 0 ;
        $c['img_name_th'] = isset($post['img_name_th']) ? $post['img_name_th'] : null ;
        $c['img_name_en'] = isset($post['img_name_en']) ? $post['img_name_en'] : null ;
        $c['status'] = isset($post['status']) ? $post['status']+0 : 0 ;
        $c['category_id'] = isset($post['category_id']) ? $post['category_id'] : 0 ;

        if( $c['status']== 1){
            try {
                menu::where('category_id',$categoryId)->update([ 'status'=>0 ]) ;
            }
            catch (\Exception $e) {
                return redirectBack($e->getMessage(),$this->errorBag(),$this->getRedirectUrl(),$request->input());
            }
        }
        $cat['thumbnail_th'] = $c['thumbnail_th'] ; 
        $cat['thumbnail_en'] = $c['thumbnail_en'] ; 
       try {
            category::find($categoryId)->update($cat) ;
            $menu = menu::find($menuId)->update($c) ;
            menuDetail::where('category_id',$post['category_id'])->where('menu_id',$menuId)->delete();
        }
        catch (\Exception $e) {
            return redirectBack($e->getMessage(),$this->errorBag(),$this->getRedirectUrl(),$request->input());
        }
        for ($i=1 ; $i<= $this->cntImg[$categoryId] ; $i++){
            if  (isset($post['img_th_'.$i])||isset($post['img_en_'.$i])||isset($post['hid_img_th_'.$i])|| isset($post['hid_img_en_'.$i])) {
                $o['category_id'] = $post['category_id'] ;
                $o['menu_id'] = $menuId ;
                $o['img_th'] = (isset($post['img_th_'.$i])) ? $post['img_th_'.$i] : ((isset($post['hid_img_th_'.$i])) ? $post['hid_img_th_'.$i] : null) ;
                $o['img_en'] = (isset($post['img_en_'.$i])) ? $post['img_en_'.$i] : ((isset($post['hid_img_en_'.$i])) ? $post['hid_img_en_'.$i] : null)   ;
                $o['name_th'] = (isset($post['name_img_th_'.$i])) ? $post['name_img_th_'.$i] : null ;
                $o['name_en'] = (isset($post['name_img_en_'.$i])) ? $post['name_img_en_'.$i] : null ;

                $o['title_th'] = (isset($post['title_menu_th_'.$i])) ? $post['title_menu_th_'.$i] : null ; 
                $o['title_en'] = (isset($post['title_menu_en_'.$i])) ? $post['title_menu_en_'.$i] : null ;
               
                $o['price_th'] = (isset($post['price_th_'.$i])) ? $post['price_th_'.$i] : null ; 
                $o['price_en'] = (isset($post['price_en_'.$i])) ? $post['price_en_'.$i] : null ;

                try {
                    menuDetail::create($o);
                }
                catch (\Exception $e) {
                    return redirectBack($e->getMessage(),$this->errorBag(),$this->getRedirectUrl(),$request->input());
                }
            }   
        }
       return redirectFlash('อัพเดทรายการ สำเร็จ',$this->route.'/'.$post['category_id']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoryId,$menuId)
    {
        try {
            menuDetail::where('menu_id', $menuId)->where('category_id', $categoryId)->delete();
            menu::find($menuId)->delete();
        }
        catch (\Exception $e) {
            return redirectFlash($e->getMessage(),$this->route.'/'.$categoryId,'error'); 
        }
        return redirectFlash('ลบรายการ สำเร็จ',$this->route.'/'.$categoryId);
    }

    public function publicStore($categoryId,$menuId,Request $request)
    {   
        $route = $this->route.'/'.$categoryId ;
        $post = $request->all();
        $status = ($post['status']) ? 0 : 1  ;
        $statusTxt = ($post['status']) ? 'Offline' : 'Online'  ;
        if(!$status){
            $cntStatus = menu::where('category_id',$categoryId)->where('status',1)->count() ;
            if ($cntStatus<=1){
                return redirectFlash('ไม่สามารถปิดรายการนี้ได้ เนื่องจาก จำนวนการแสดงผลหน้าเว็บต้องมี 1 รายการค่ะ',$route,'error');
            }
        }
        if( $status== 1){
            try {
                menu::where('category_id',$categoryId)->update([ 'status'=>0 ]) ;
            }
            catch (\Exception $e) {
                return redirectFlash($e->getMessage(),$route,'error');
              
            }
            
        }

        try {
            $db = menu::find($menuId)->update(['status'=>$status ]) ;
        }
        catch (\Exception $e) {
            return redirectFlash($e->getMessage(),$route,'error'); 
        }
       
       return redirectFlash($statusTxt.' Successfully',$route);
    }

    private function fileUpload($request){
        $post = $request->all();

        $upload = uploadfile($request,'thumbnail_th',$this->resize[$post['category_id']][0]) ;
        if(!$upload['result']){
           return $upload ;
        }
        if(isset($upload['imagePath'])){
            $post['thumbnail_th'] = $upload['imagePath'] ;
        }
        $upload = uploadfile($request,'thumbnail_en',$this->resize[$post['category_id']][0]) ;
        if(!$upload['result']){
           return $upload ;
        }
        if(isset($upload['imagePath'])){
            $post['thumbnail_en'] = $upload['imagePath'] ;
        }

        
    
        for($th =1 ; $th<= $this->cntImg[$post['category_id']] ;$th++){
            $upload = uploadfile($request,'img_th_'.$th,$this->resize[$post['category_id']][$th]) ;
            if(!$upload['result']){
               return $upload ;
            }
            if(isset($upload['imagePath'])){
                $post['img_th_'.$th] = $upload['imagePath'] ;
            }
        }
        for($en =1 ; $en<= $this->cntImg[$post['category_id']] ;$en++){
            $upload = uploadfile($request,'img_en_'.$en,$this->resize[$post['category_id']][$en]) ;
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
    
     private function initResizeImage(){
        $resize[1][0] = ['w'=>266,'h'=>258]; 
        $resize[1][1] = ['w'=>452,'h'=>526]; 
        $resize[1][2] = ['w'=>266,'h'=>268]; 
        $resize[1][3] = ['w'=>262,'h'=>268]; 
        $resize[1][4] = ['w'=>262,'h'=>258];

        $resize[2][0] = ['w'=>454,'h'=>114]; 
        $resize[2][1] = ['w'=>228,'h'=>228]; 
        $resize[2][2] = ['w'=>226,'h'=>228]; 
        $resize[2][3] = ['w'=>526,'h'=>526]; 
        $resize[2][4] = ['w'=>454,'h'=>184];

        $resize[3][0] = ['w'=>224,'h'=>226]; 
        $resize[3][1] = ['w'=>528,'h'=>528]; 
        $resize[3][2] = ['w'=>228,'h'=>226]; 
        $resize[3][3] = ['w'=>224,'h'=>302]; 
        $resize[3][4] = ['w'=>228,'h'=>302];

        $resize[4][0] = ['w'=>260,'h'=>266]; 
        $resize[4][1] = ['w'=>460,'h'=>314]; 
        $resize[4][2] = ['w'=>520,'h'=>260]; 
        $resize[4][3] = ['w'=>260,'h'=>266]; 
        $resize[4][4] = ['w'=>460,'h'=>210];

        $resize[5][0] = ['w'=>528,'h'=>528]; 
        $resize[5][1] = ['w'=>528,'h'=>528]; 
        $resize[5][2] = ['w'=>452,'h'=>292]; 
        $resize[5][3] = ['w'=>452,'h'=>236]; 

        $resize[6][0] = ['w'=>424,'h'=>102]; 
        $resize[6][1] = ['w'=>278,'h'=>246]; 
        $resize[6][2] = ['w'=>278,'h'=>246]; 
        $resize[6][3] = ['w'=>424,'h'=>424]; 
        $resize[6][4] = ['w'=>278,'h'=>280];
        $resize[6][5] = ['w'=>278,'h'=>280];

        $resize[7][0] = ['w'=>260,'h'=>260]; 
        $resize[7][1] = ['w'=>976,'h'=>702]; 
        $resize[7][2] = ['w'=>478,'h'=>344]; 
        $resize[7][3] = ['w'=>476,'h'=>344]; 

        $resize[8][0] = ['w'=>260,'h'=>260]; 
        $resize[8][1] = ['w'=>964,'h'=>706]; 
        $resize[8][2] = ['w'=>314,'h'=>312]; 
        $resize[8][3] = ['w'=>314,'h'=>312]; 
        $resize[8][4] = ['w'=>314,'h'=>312];

        $resize[9][0] = ['w'=>260,'h'=>260]; 
        $resize[9][1] = ['w'=>474,'h'=>474]; 
        $resize[9][2] = ['w'=>234,'h'=>234]; 
        $resize[9][3] = ['w'=>474,'h'=>474]; 
        $resize[9][4] = ['w'=>234,'h'=>234];

        $resize[11][0] = ['w'=>484,'h'=>484]; 
        $resize[11][1] = ['w'=>484,'h'=>484];
        $resize[11][2] = ['w'=>240,'h'=>240]; 
        $resize[11][3] = ['w'=>240,'h'=>240]; 
        $resize[11][4] = ['w'=>240,'h'=>240]; 
        $resize[11][5] = ['w'=>240,'h'=>240];
        $resize[11][6] = ['w'=>484,'h'=>484];
        $resize[11][7] = ['w'=>484,'h'=>484];

        $resize[12][0] = ['w'=>260,'h'=>266]; 
        $resize[12][1] = ['w'=>980,'h'=>576]; 
        $resize[12][2] = ['w'=>484,'h'=>484]; 
        $resize[12][3] = ['w'=>484,'h'=>484]; 
        $resize[12][4] = ['w'=>980,'h'=>152];

        $resize[13][0] = ['w'=>260,'h'=>266]; 
        $resize[13][1] = ['w'=>980,'h'=>640]; 
        $resize[13][2] = ['w'=>316,'h'=>316]; 
        $resize[13][3] = ['w'=>316,'h'=>316]; 
        $resize[13][4] = ['w'=>316,'h'=>316]; 

        $this->resize = $resize ;
    }   
    private function initNavigatorImage(){
        
        for ($i=0;$i<=4;$i++){
            $navigateImg[1][$i] = 'img/backend/m_2_'.$i.'.jpg';
        }

        for ($i=0;$i<=4;$i++){
            $navigateImg[2][$i] = 'img/backend/m_4_'.$i.'.jpg';
        }

        for ($i=0;$i<=4;$i++){
            $navigateImg[3][$i] = 'img/backend/m_3_'.$i.'.jpg';
        }

        for ($i=0;$i<=4;$i++){
            $navigateImg[4][$i] = 'img/backend/m_1_'.$i.'.jpg';
        }

        for ($i=0;$i<=3;$i++){
            $navigateImg[5][$i] = 'img/backend/m_5_'.$i.'.jpg';
        }
        
        for ($i=0;$i<=5;$i++){
            $navigateImg[6][$i] = 'img/backend/m_6_'.$i.'.jpg';
        }
   
        for ($i=0;$i<=4;$i++){
            $navigateImg[7][$i] = 'img/backend/m_9_'.$i.'.jpg';
        }
        for ($i=0;$i<=4;$i++){
            $navigateImg[8][$i] = 'img/backend/m_8_'.$i.'.jpg';
        }
        for ($i=0;$i<=4;$i++){
            $navigateImg[9][$i] = 'img/backend/m_7_'.$i.'.jpg';
        }
    
        for ($i=0;$i<=7;$i++){
            $img =  ($i==0) ? 9 : $i  ;
            $navigateImg[11][$i] = 'img/backend/m_11_'.$img.'.jpg';
        }
        for ($i=0;$i<=4;$i++){
            $img =  ($i==0) ? 5 : $i  ;
            $navigateImg[12][$i] = 'img/backend/m_10_'.$img.'.jpg';
        }
        
        for ($i=0;$i<=4;$i++){
            $navigateImg[13][$i] = 'img/backend/m_13_'.$i.'.jpg';
        }
  
        $this->navigateImg = $navigateImg ;
    }   
    private function initMainNavigatorImage(){
        $img[1] = 'img/backend/m_2.jpg'; 
        $img[2] = 'img/backend/m_4.jpg'; 
        $img[3] = 'img/backend/m_3.jpg'; 
        $img[4] = 'img/backend/m_1.jpg'; 
        $img[5] = 'img/backend/m_5.jpg'; 
        $img[6] = 'img/backend/m_6.jpg'; 
        $img[7] = 'img/backend/m_9.jpg'; 
        $img[8] = 'img/backend/m_8.jpg'; 
        $img[9] = 'img/backend/m_7.jpg'; 
        $img[11] = 'img/backend/m_11.jpg'; 
        $img[12] = 'img/backend/m_10.jpg'; 
        $img[13] = 'img/backend/m_13.jpg'; 
     
        $this->mainNavigateImg = $img ;
    }  
    private function initCntImg(){
        for ($i=1;$i<=13;$i++){
             $cntImg[$i] =  4 ; 
        }
        $cntImg[5] =  3 ; 
        $cntImg[6] =  5 ; 
        $cntImg[7] =  3 ; 
        $cntImg[11] =  7 ; 
        $this->cntImg = $cntImg ;
    }
     private function categoryName($categoryId){
        switch ($categoryId) {
            case 1: $name = ' pork (หมู)';break;
            case 2: $name = ' chicken (ไก่)';break;
            case 3: $name = ' seafood (อาหารทะเล)';break;
            case 4: $name = ' beef (เนื้อ)';break;
            case 5: $name = ' burger (เบอเกอร์)';break;
            case 6: $name = ' kid-menu (เมนูสำหรับเด็ก)';break;
            case 7: $name = ' com-beef (639)';break;
            case 8: $name = ' com-suprem (499)';break;
            case 9: $name = ' com-platter (399)';break;
            case 11: $name = ' wednesday';break;
            case 12: $name = ' everyday';break;
            case 13: $name = ' lunch';break;
        }

        return $name ;
    }
}
