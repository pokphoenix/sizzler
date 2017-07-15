<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\category;
use App\Models\menu;
use App\Models\media;
use App\Models\location;
use App\Models\banner;
use App\Models\slidersub;
use App\Models\promotionSlider;
use App\Models\promotionBanner;
use App\Models\healthtip;
use DB;
class HomeController extends Controller
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
        $sliderMains = slider::where('position','<>',0)->where('position','<',999)->where('status',1)->get();
        $sliderSub = slidersub::where('position','<',3)->get();
        $banner = banner::limit(1)->where('status',1)->get();

        // $sliderMains = category::select('thumbnail_th')->get();
        // $sliderMains = category::select('thumbnail_th')->get();
        // $sliderMains = category::select('thumbnail_th')->get();
        $data['sliderMains'] = $sliderMains  ;
        $data['sliderSub'] = $sliderSub  ;
        $data['banners'] = $banner  ;
        return view('home',$data);
    } 

    public function category($id)
    {   
        $data = category::find($id);
        $data['data'] = $data  ;
        dd($data);
        return view('category',$data);
    }

    public function menu($id)
    {   
        $data = menu::find($id);
        $data['data'] = $data  ;
        dd($data);
        return view('category',$data);
    }

    public function location()
    {   
        $query = location::all();
        $data['data'] = $query;
        return view('location',$data);
    }
    public function media()
    {   
        $query = media::all();
        $data['data'] = $query;
        return view('media',$data);
    } 
    public function healthtip($id)
    {   
        $query = healthtip::find($id);
        $data['data'] = $query;

        $other = healthtip::where('position','<',5)->get();
        $data['other'] = $other;

        return view('healthtip',$data);
    }
    public function promotion()
    {   
        $promotionSlider = promotionSlider::where('position','<',3)->get();
        $promotionBanner = banner::limit(1)->where('status',1)->get();
        // $banner = banner::limit(1)->where('status',1)->get();
        $data['promotionSlider'] = $promotionSlider;
        $data['banners'] = $promotionBanner;
        return view('promotion',$data);
    }

    public function about()
    {   
        return view('about');
    }
    public function career()
    {   
        return view('career');
    }
    public function contact()
    {   
        return view('contact');
    }
    public function international()
    {   
        return view('international');
    }



    public function beef()
    {   
        $query = category::find(4)->menu()->get();
        $data['data'] = $query  ;
        return view('menu.beef',$data);
    }
     public function burger()
    {   
        $query = category::find(5)->menu()->get();
        $data['data'] = $query  ;
        return view('menu.burger',$data);
    }
     public function chicken()
    {   
        $query = category::find(2)->menu()->get();
        $data['data'] = $query  ;
        return view('menu.chicken',$data);
    }
     public function comBeef()
    {   
        $query = category::find(7)->menu()->get();
        $data['data'] = $query  ;
        return view('menu.com_beef',$data);
    }
     public function comPlatter()
    {   
        $query = category::find(9)->menu()->get();
        $data['data'] = $query  ;
        return view('menu.com_platter',$data);
    }
     public function comSuprem()
    {   
        $query = category::find(8)->menu()->get();
        $data['data'] = $query  ;
        return view('menu.com_suprem',$data);
    }
     public function kidmenu()
    {   
        $query = category::find(6)->menu()->get();
        $data['data'] = $query  ;
        return view('menu.kidmenu',$data);
    }
     public function pork()
    {   
        $query = category::find(1)->menu()->get();
        $data['data'] = $query  ;
        return view('menu.pork',$data);
    }
     public function seafood()
    {   
        $query = category::find(3)->menu()->get();
        $data['data'] = $query  ;
        return view('menu.seafood',$data);
    }
}
