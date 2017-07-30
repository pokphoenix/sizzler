<?php

namespace App\Http\Controllers\Back;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller ;
use DB;
use App\Http\Requests\LocationValidate;
use App\Models\location;
use App\Models\province;

use Route;
use stdClass;
use Auth;
class LocationController extends Controller
{
    public $route = 'admin/location' ;
    public $view = 'admin.location' ;
    public $controllerName = 'สาขา' ;

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
        $sortBy = 'location.'.$request->input('sortby', 'created_at');
        $sortType = $request->input('type', 'desc'); 
        $search = $request->input('search');
        $sortNextType = ($sortType=='desc') ? 'asc' : 'desc' ;
        if(isset($search)){
            $tables = location::where('location.name_th', 'like', '%'.$search.'%')
                ->orWhere('location.name_en', 'like', '%'.$search.'%')
                ->join('provinces', 'provinces.id', '=', 'location.province_id')
                ->select('location.*', 'provinces.province_name_th')
                ->orderBy($sortBy,$sortType)
                ->paginate(PAGINATE);
        }else{
            // $tables =  location::join('provinces', 'provinces.id', '=','location.province_id')->orderBy($sortBy,$sortType)->paginate(PAGINATE) ;
            // $tables = location::join('provinces', 'provinces.id', '=','location.province_id')->orderBy($sortBy,$sortType)->paginate(PAGINATE);
            $tables =  location::join('provinces', 'provinces.id', '=', 'location.province_id')
            ->select('location.*', 'provinces.province_name_th')
            ->orderBy($sortBy,$sortType)->paginate(PAGINATE);
            
                          // $tables =  DB::table('location')->join('provinces', 'provinces.id', '=','location.province_id')->select('location.*,provinces.province_name_th')->orderBy($sortBy,$sortType)->paginate(PAGINATE) ;

        }
        // $query = DB::table('location')
        //         ->join('provinces', 'provinces.id', '=','location.province_id')
        //         ->get();
        //         dd($query);

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

        $category = province::all();
        $data['categorys'] = $category ;

        return view($this->view.'.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocationValidate $request)
    {
        $post = $request->all();
        location::create($post);
        return redirectFlash('เพิ่มรายการ สำเร็จ',$this->route);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        $data['title'] = $this->controllerName.' : '.$location->name_th ;
        $data['route'] = $this->route ;
        $data['data'] = $location;
       
       return view($this->view.'.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        $data['title'] = 'แก้ไข '.$this->controllerName ;
        $data['route'] = $this->route ;
        $data['data'] = $location ;
        $category = province::all();
        $data['categorys'] = $category ;
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
    public function update(LocationValidate $request, $id)
    {
        $post = $request->all();
        if(!$post['status']){
            $cntStatus = location::where('status',1)->count() ;
            if ($cntStatus<=1){
                return redirectBack('ไม่สามารถปิดรายการนี้ได้ เนื่องจาก จำนวนการแสดงผลหน้าเว็บน้อยกว่า 1 รูปค่ะ',$this->errorBag(),$this->getRedirectUrl(),$request->input());

            }
        }
        $db = location::find($id)->update($post) ;
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
        $cntStatus = location::where('status',1)->count() ;
        if ($cntStatus<=1){
            return redirectFlash('ไม่สามารถลบรายการนี้ได้ เนื่องจาก จำนวนการแสดงผลหน้าเว็บต้องไม่น้อยกว่า 1 รูปค่ะ',$this->route,'error');
        }
        location::find($id)->delete();
        return redirectFlash('ลบรายการ สำเร็จ',$this->route);
    }

    public function publicStore($id,Request $request)
    {   
        $post = $request->all();
        $status = ($post['status']) ? 0 : 1  ;
        $statusTxt = ($post['status']) ? 'Offline' : 'Online'  ;
        if(!$status){
            $cntStatus = location::where('status',1)->count() ;
            if ($cntStatus<=1){
                return redirectFlash('ไม่สามารถปิดรายการนี้ได้ เนื่องจาก จำนวนการแสดงผลหน้าเว็บน้อยกว่า 1 รูปค่ะ',$this->route,'error');
            }
        }
        $db = location::find($id)->update(['status'=>$status ]) ;
       return redirectFlash($statusTxt.' Successfully',$this->route);
    }
}
