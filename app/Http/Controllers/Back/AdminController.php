<?php

namespace App\Http\Controllers\Back;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\role;
use App\role_admin;
use Auth;
class AdminController extends Controller
{
    public $route = 'admin/management' ;
    public $controllerName = 'admin management' ;
    public $view = "admin.auth";

    public function __construct(){

      
    }

    private function checkpermission(){
        if( Auth::user()->id != 1 ){
            return redirect('admin/nopermission');
        }
    }

    public function noPermission(){
          return view('no_permission');
    }

    public function index(Request $request)
    {
        if( Auth::user()->id != 1 ){
            return redirect('admin/nopermission');
        }

        $data['title'] = $this->controllerName ;
        $data['route'] = $this->route ;
        // $url = $request->fullUrl();
        $sortBy = $request->input('sortby', 'admins.created_at');
        $sortType = $request->input('type', 'desc'); 
        $search = $request->input('search');
        $sortNextType = ($sortType=='desc') ? 'asc' : 'desc' ;
        if(isset($search)){
           
            $tables = Admin::where('name', 'like', '%'.$search.'%')
                ->orWhere('lastname', 'like', '%'.$search.'%')
                ->orderBy($sortBy,$sortType)
                ->paginate(PAGINATE);
        }else{
            // $tables =   Admin::join('provinces', 'provinces.id', '=', 'location.province_id')
            // ->select('location.*', 'provinces.province_name_th')
            // ->orderBy($sortBy,$sortType)->paginate(PAGINATE);
            $tables =  Admin::select('admins.*', 'r.name as role_name')
                        ->join('role_admins as ra','ra.admin_id','=','admins.id')
                        ->join('roles as r','r.id','=','ra.role_id')
                        ->orderBy($sortBy,$sortType)->paginate(PAGINATE) ;
        }
        $data['tables'] = $tables;
        $data['search'] = $search;
        $data['sortBy'] = $sortBy;
        $data['sortType'] = $sortType;
        $data['sortNextType'] = $sortNextType;
        $data['auth'] = Auth::user()->isAdmin() ;
        // dd($data);
        return view('admin.auth.index',$data);
    }
    public function create()
    {
        if( Auth::user()->id != 1 ){
            return redirect('admin/nopermission');
        }
        $data['title'] = 'สร้างแอดมินใหม่';
        $data['route'] = $this->route ;
        $role = role::all();
        $data['roles'] = $role ;

        return view('admin.auth.register',$data);
    }
    public function store(Request $request )
    {

        if( Auth::user()->id != 1 ){
            return redirect('admin/nopermission');
        }
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role_id' => 'required',
        ]);
        if ($validator->fails())
        {
            return redirect()->to($this->getRedirectUrl())
                    ->withInput($request->input())
                    ->withErrors($validator->errors()->getMessages(), $this->errorBag() );
        }

        try {
            $admin = new Admin ;
            $admin->name = $data['name'] ;
            $admin->lastname = $data['lastname'] ;
            $admin->email = $data['email'] ;
            $admin->password = bcrypt($data['password']) ;
            $admin->save();
            $admin->role()->attach($data['role_id']);
        }
        catch (\Illuminate\Database\QueryException $e) {
           // dd($e->errorInfo[0]); //$e->errorInfo[1]
            if($e->errorInfo[0]==23505){
                $message = "email ซ้ำ" ;
            }else{
                $message = $e->errorInfo[1] ;
            }

            return redirect()->to($this->getRedirectUrl())
                    ->withInput($request->input())
                    ->withErrors( $message , $this->errorBag() );
           
        }
        session()->flash('message','Create Successfully');
        return redirect('admin/management');
    }
   
    public function show($id)
    {
        $admin = Admin::where('admins.id',$id)->select('admins.*', 'r.id as role_id')
         ->join('role_admins as ra','ra.admin_id','=','admins.id')
         ->join('roles as r','r.id','=','ra.role_id')
         ->first();
        // $admin = Admin::find($id);
        
        $data['title'] = 'แก้ไข '.$this->controllerName ;
        $data['route'] = $this->route ;
        $data['data'] = $admin ;
        $data['edit'] = true ;
        $data['show'] = true ;
        $role = role::all();
        $data['roles'] = $role ;
        return view($this->view.'.register',$data);
    }
     public function profile($id)
    {
        $admin = Admin::where('admins.id',$id)->select('admins.*', 'r.id as role_id')
         ->join('role_admins as ra','ra.admin_id','=','admins.id')
         ->join('roles as r','r.id','=','ra.role_id')
         ->first();
        // $admin = Admin::find($id);
        
        $data['title'] = 'ยินดีต้อนรับ '.$admin->name.' '.$admin->lastname ;
        $data['route'] = $this->route ;
        $data['data'] = $admin ;
        $data['edit'] = true ;
        $data['show'] = true ;
        $data['profile'] = true ;
        // $data['']
        $role = role::all();
        $data['roles'] = $role ;
        $data['backUrl'] = 'admin/home';
        return view($this->view.'.register',$data);
    }

     public function editProfile($id)
    {
        $admin = Admin::where('admins.id',$id)->select('admins.*', 'r.id as role_id')
         ->join('role_admins as ra','ra.admin_id','=','admins.id')
         ->join('roles as r','r.id','=','ra.role_id')
         ->first();
        $data['title'] = 'ยินดีต้อนรับ '.$admin->name.' '.$admin->lastname ;
        $data['route'] = $this->route ;
        $data['data'] = $admin ;
        $data['edit'] = true ;
        $data['profile'] = true ;
         $data['backUrl'] = 'admin/home';
        $role = role::all();
        $data['roles'] = $role ;
        return view($this->view.'.register',$data);
    } 
     public function changepass($id)
    {
       
        $data['title'] = 'ยินดีต้อนรับ ' ;
        $data['route'] = 'admin/changepass' ;
        $data['backUrl'] = 'admin/home';
        $data['data']['id'] = $id ;
        return view($this->view.'.changepass',$data);
    }
    public function storeChangepass(Request $request, $id)
    {
        $post = $request->all();
        $validator = Validator::make($post, [
            'password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6|confirmed',
        ]);
        if ($validator->fails())
        {
            return redirect()->to($this->getRedirectUrl())
                    ->withInput($request->input())
                    ->withErrors($validator->errors()->getMessages(), $this->errorBag() );
        }

        if (Auth::attempt(['email' => Auth::user()->email, 'password' =>$post['password'] ])) {
            $post['password'] = bcrypt($post['new_password']);
            unset($post['new_password']);
            Admin::find($id)->update($post);
            session()->flash('message','changepass Successfully');
            return redirect('admin/home');
        }else{
            return redirect()->to($this->getRedirectUrl())
                    ->withInput($request->input())
                    ->withErrors('wrong old password', $this->errorBag() );
        }
        


       
    }





    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::where('admins.id',$id)->select('admins.*', 'r.id as role_id')
         ->join('role_admins as ra','ra.admin_id','=','admins.id')
         ->join('roles as r','r.id','=','ra.role_id')
         ->first();
        // $admin = Admin::find($id);
        
        $data['title'] = 'แก้ไข '.$this->controllerName ;
        $data['route'] = $this->route ;
        $data['data'] = $admin ;
        $data['edit'] = true ;
        $role = role::all();
        $data['roles'] = $role ;
        return view($this->view.'.register',$data);
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
        $post = $request->all();
        $validator = Validator::make($post, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users'
        ]);
        if ($validator->fails())
        {
            return redirect()->to($this->getRedirectUrl())
                    ->withInput($request->input())
                    ->withErrors($validator->errors()->getMessages(), $this->errorBag() );
        }

        Admin::find($id)->update($post);

        if($id!=1&&isset($post['role_id'])){
             $validator = Validator::make($post, [
                'role_id' => 'required',
            ]);
            if ($validator->fails())
            {
                return redirect()->to($this->getRedirectUrl())
                        ->withInput($request->input())
                        ->withErrors($validator->errors()->getMessages(), $this->errorBag() );
            }
            role_admin::where('admin_id','=',$id)->update(['role_id'=>$post['role_id']]);
        }elseif($id==1){
            session()->flash('message','Updated Successfully');
            return redirect($this->route);
        }

        session()->flash('message','Updated Successfully');
        return redirect('admin/home');

    }

    public function destroy($id)
    {
        if( Auth::user()->id != 1 ){
            return redirect('admin/nopermission');
        }
        if($id==1){
            session()->flash('error','ไม่สามารถลบรายการนี้ได้ เนื่องจาก เป็น super admin ค่ะ');
            return redirect($this->route);
        }
        $admin = Admin::find($id);
        $admin->delete();
        $admin->role()->detach();

        session()->flash('message','Delete Successfully');
        return redirect($this->route);
    } 

}
