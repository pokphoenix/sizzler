<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;
use App\Models\release;
use Illuminate\Support\Facades\Log;
use App;
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
        try {
            $query = release::find($id)->where('status',1)->first();
        } catch (\Exception $e) {
               Log::error("[Front] ReleaseController@releaseView : ".$e->getMessage());
               return redirect('notfound');
        }  
        $aside = $query->releaseimages;
        $data['data'] = $query;
        $data['aside'] = $aside;

        $other = release::where('position','<>',0)->inRandomOrder()->limit(4)->get();
        $data['other'] = $other;
        $data['lang'] = (App::getLocale()=='th') ? '/th/' : '/en/' ;
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
        $data['lang'] = (App::getLocale()=='th') ? '/th/' : '/en/' ;
        return view('front.release.view',$data);
    } 
}
