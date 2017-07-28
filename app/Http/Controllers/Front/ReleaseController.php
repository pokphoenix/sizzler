<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;
use App\Models\release;
class ReleaseController extends Controller
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
    public function releaseView($id)
    {   
        $query = release::find($id)->where('status',1)->first();
        if(is_null($query)){
            return redirect()->to('notfound');
        }
        $aside = $query->releaseimages;
        $data['data'] = $query;
        $data['aside'] = $aside;

        $other = release::where('position','<>',0)->inRandomOrder()->limit(4)->get();
        $data['other'] = $other;

        return view('front.release.view',$data);
    }
    public function releasePreview($id)
    {   
        $query = release::find($id);
        if(is_null($query)){
            return redirect()->to('notfound');
        }
        $aside = $query->releaseimages;
        $data['data'] = $query;
        $data['aside'] = $aside;

        $other = release::where('position','<>',0)->inRandomOrder()->limit(4)->get();
        $data['other'] = $other;

        return view('front.release.view',$data);
    } 
}
