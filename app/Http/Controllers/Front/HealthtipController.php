<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;
use App\Models\healthtip;
use Illuminate\Support\Facades\Log;
class HealthtipController extends Controller
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
   
    public function healthtip()
    {   

        try {
            $healthtip = healthtip::where('status',1)->get();
        } catch (\Exception $e) {
               Log::error("[Front] HealthtipController@healthtip : ".$e->getMessage());
               return redirect('notfound');
        }   
        
        $data['healthtip'] = $healthtip;
        return view('front.healthtip.index',$data);
    }
    public function healthtipView($id)
    {   
        try {
            $query = healthtip::find($id);
        } catch (\Exception $e) {
           Log::error("[Front] HealthtipController@healthtipView : ".$e->getMessage());
           return redirect('notfound');
        }   
        $aside = $query->images;
        $data['data'] = $query;
        $data['aside'] = $aside;

        $other = healthtip::where('position','<>',0)->inRandomOrder()->limit(4)->get();
        $data['other'] = $other;

        return view('front.healthtip.view',$data);
    }
    public function healthtipPreview($id)
    {   
        try {
            $query = healthtip::find($id);
        } catch (\Exception $e) {
           dd($e->getMessage());
           Log::error("[Front] HealthtipController@healthtipPreview : ".$e->getMessage());
        }
        $aside = $query->images;
        $data['data'] = $query;
        $data['aside'] = $aside;

        $other = healthtip::where('position','<>',0)->inRandomOrder()->limit(4)->get();
        $data['other'] = $other;

        return view('front.healthtip.view',$data);
    }
    
}
