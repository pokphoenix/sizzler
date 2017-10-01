<?php

namespace App\Http\Controllers\Back;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller ;
use DB;
use App\Http\Requests\FormValidate;
use App\Models\contact;
use Route;
use stdClass ;
use Auth;
class ContactController extends Controller
{
    public $route = 'admin/contact' ;
    public $controllerName = 'รายชื่อผู้ติดต่อ' ;
    public $view = "admin.contact";
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
            $tables = contact::where('name', 'like', '%'.$search.'%')
                ->orWhere('email', 'like', '%'.$search.'%')
                ->orWhere('tel', 'like', '%'.$search.'%')
                ->orderBy($sortBy,$sortType)
                ->paginate(PAGINATE);
        }else{
            $tables =  contact::orderBy($sortBy,$sortType)->paginate(PAGINATE) ;
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
        return view($this->view.'.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = self::fileUpload($request);
        if(!$post['result']){
            return redirectBack($post['error'],$this->errorBag(),$this->getRedirectUrl(),$request->input());
        }
        contact::create($post);
        return redirectFlash('เพิ่มรายการ สำเร็จ',$this->route);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        $data['title'] = $this->controllerName.' : '.$contact->name_th ;
        $data['data'] = $contact;
        $data['route'] = $this->route;
       return view($this->view.'.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        $data['title'] = 'แก้ไข '.$this->controllerName ;
         $data['route'] = $this->route ;
        $data['data'] = $contact ;
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
    public function update(Request $request, $id)
    {
        $post = self::fileUpload($request);
        if(!$post['result']){
            return redirectBack($post['error'],$this->errorBag(),$this->getRedirectUrl(),$request->input());
        }
        $db = contact::find($id)->update($post) ;
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
        contact::find($id)->delete();
        return redirectFlash('ลบรายการ สำเร็จ',$this->route);
    }

    public function publicStore($id,Request $request)
    {   
        $post = $request->all();
        $status = ($post['status']) ? 0 : 1  ;
        $statusTxt = ($post['status']) ? 'Unseen' : 'Seen'  ;
        $db = contact::find($id)->update(['status'=>$status ]) ;
       return redirectFlash($statusTxt.' Successfully',$this->route);
    }
}
