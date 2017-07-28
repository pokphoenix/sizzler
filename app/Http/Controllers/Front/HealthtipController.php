<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;
use App\Models\healthtip;

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
        $healthtip = healthtip::where('status',1)->get();
        $data['healthtip'] = $healthtip;
        return view('front.healthtip.index',$data);
    }
    public function healthtipView($id)
    {   
        $query = healthtip::find($id);
        if(is_null($query)){
            return redirect()->to('notfound');
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
        $query = healthtip::find($id);
        if(is_null($query)){
            return redirect()->to('notfound');
        }
        $aside = $query->images;
        $data['data'] = $query;
        $data['aside'] = $aside;

        $other = healthtip::where('position','<>',0)->inRandomOrder()->limit(4)->get();
        $data['other'] = $other;

        return view('front.healthtip.view',$data);
    }
    
}
