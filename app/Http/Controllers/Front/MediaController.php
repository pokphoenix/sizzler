<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;
use App\Models\media;
// use App\Models\release;
use Illuminate\Support\Facades\Log;
use App;
class MediaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        try {
            $tvc = media::where('media_category_id',1)->where('status',1)->orderBy('position','asc')->get();
        } catch (\Exception $e) {
               Log::error("[Front] MediaController@index : ".$e->getMessage());
               return redirect('notfound');
        } 

        // $tvc = media::where('media_category_id',1)->where('status',1)->orderBy('position','asc')->get();
        $data['tvcs'] = $tvc;
         $data['lang'] = (App::getLocale()=='th') ? '/th/' : '/en/' ;
        // $release = release::where('status',1)->get();
        // $data['tvcs'] = $tvc;
        // $data['release'] = $release;

        return view('front.media.index',$data);
    } 
    public function view($id)
    {   
        try {
            $query = media::where('id',$id)->where('status',1)->first();
            $other = media::where('status',1)->where('position','<',4)->get();
        } catch (\Exception $e) {
               Log::error("[Front] MediaController@view : ".$e->getMessage());
               return redirect('notfound');
        } 
        $data['data'] = $query;
        $data['others'] = $other;
         $data['lang'] = (App::getLocale()=='th') ? '/th/' : '/en/' ;
        return view('front.media.view',$data);
    }  
    public function preview($id)
    {   
        try {
            $query = media::where('id',$id)->first();
            $other = media::where('status',1)->where('position','<',4)->get();
        } catch (\Exception $e) {
               Log::error("[Front] MediaController@preview : ".$e->getMessage());
               dd($e->getMessage());
        } 
        $data['data'] = $query;
        $data['others'] = $other;
         $data['lang'] = (App::getLocale()=='th') ? '/th/' : '/en/' ;
        return view('front.media.view',$data);
    } 
}
