<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;
use App\Models\media;
use App\Models\release;
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
        $tvc = media::where('media_category_id',1)->where('status',1)->orderBy('position','asc')->get();
        $data['tvcs'] = $tvc;

        $release = release::where('status',1)->get();
        $data['tvcs'] = $tvc;
        $data['release'] = $release;

        return view('front.media.index',$data);
    } 
    public function view($id)
    {   
        $query = media::where('id',$id)->where('status',1)->first();
        if(is_null($query)){
            return redirect()->to('notfound');
        }
        $other = media::where('status',1)->where('position','<',4)->get();
        $data['data'] = $query;
        $data['others'] = $other;
        return view('front.media.view',$data);
    }  
    public function preview($id)
    {   
        $query = media::where('id',$id)->first();
        if(is_null($query)){
            return redirect()->to('notfound');
        }
        $other = media::where('status',1)->where('position','<',4)->get();
        $data['data'] = $query;
        $data['others'] = $other;
        return view('front.media.view',$data);
    } 
}
