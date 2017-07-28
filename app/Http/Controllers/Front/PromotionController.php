<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;
use App\Models\promotionSlider;
use App\Models\promotionSliderSub;
use App\Models\promotionBanner;
use App\Models\promotion;

class PromotionController extends Controller
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

    public function promotion()
    {   
        $promotionBanner = promotionBanner::limit(1)->where('status',1)->get();

        $promotionSlider = promotionSlider::where('position','<',3)->where('status',1)->get();
        $promotionSliderSub = promotionSliderSub::where('position','<',3)->where('status',1)->get();
        $promotion = promotion::limit(2)->where('position','<=',2)->where('status',1)->get();

        // $banner = banner::limit(1)->where('status',1)->get();
        $data['promotionSlider'] = $promotionSlider;
        $data['promotionSliderSub'] = $promotionSliderSub;
        $data['banners'] = $promotionBanner;
        $data['promotion'] = $promotion;
        
        return view('front.promotion.index',$data);
    }
    public function promotionView($id)
    {   
        $promotion = promotion::find($id)->where('status',1)->get();
        $data['data'] = $promotion;
        return view('front.promotion.view',$data);
    }
    public function proSliderWidthPreview($id)
    {   
        $promotionSliderSub = promotionSliderSub::where('position','<',3)->get();
        $data['promotionSliderSub'] = $promotionSliderSub;
        return view('front.promotion.slider-width-preview',$data);
    }
    public function proSliderPreview($id)
    {   
       
        $slider = promotionSlider::find($id);

        $result[0]['url'] = $slider->url ;
        $result[0]['img_th'] = $slider->img_th ;
        $result[0]['name_th'] = $slider->name_th ;
        $result[0]['img_en'] = $slider->img_en ;
        $result[0]['name_en'] = $slider->name_en ;
        $result[1]['url'] = '';
        $result[1]['img_th'] =null ;
        $result[1]['name_th'] = $slider->name_th ;
        $result[1]['img_en'] = null ;
        $result[1]['name_en'] = $slider->name_en ;
        $data['sliderSub'] = $result;
 
        return view('front.home.slider-sub-preview',$data);
    }

    public function proBannerPreview($id)
    {   
        $promotionBanner = promotionBanner::limit(1)->get();
        $data['banners'] = $promotionBanner;
        return view('front.promotion.banner-preview',$data);
    }
}
