<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller ;
use App\Models\promotion;
use App\Models\promotionBanner;
use App\Models\promotionSlider;
use App\Models\promotionSliderSub;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Log;
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
        try {
            $promotionBanner = promotionBanner::limit(1)->where('status',1)->get();
            $promotionSlider = promotionSlider::where('position','<',3)->where('status',1)->get();
            $promotion = promotion::where('status',1)->orderby('position','asc')->get();
        } catch (\Exception $e) {
            Log::error("[Front] PromotionController@promotion : ".$e->getMessage());
            return redirect('notfound');
        } 
        // $banner = banner::limit(1)->where('status',1)->get();
        $data['promotionSlider'] = $promotionSlider;
        // $data['promotionSliderSub'] = $promotionSliderSub;
        $data['banners'] = $promotionBanner;
        $data['promotion'] = $promotion;
        $data['lang'] = (App::getLocale()=='th') ? '/th/' : '/en/' ;
        return view('front.promotion.index',$data);
    }
    public function promotionView()
    {   
        try {
            $promotion = promotion::where('status',1)->orderby('position','asc')->get();
        } catch (\Exception $e) {
            Log::error("[Front] PromotionController@promotionView : ".$e->getMessage());
            return redirect('notfound');
        }
        $data['data'] = $promotion;
        $data['lang'] = (App::getLocale()=='th') ? '/th/' : '/en/' ;
        return view('front.promotion.view',$data);
    }
    public function proSliderWidthPreview($id)
    {   
        try {
            $promotionSliderSub = promotionSliderSub::where('position','<',3)->get();
        } catch (\Exception $e) {
            Log::error("[Front] PromotionController@proSliderWidthPreview : ".$e->getMessage());
            return redirect('notfound');
        }
        $data['promotionSliderSub'] = $promotionSliderSub;
        $data['lang'] = (App::getLocale()=='th') ? '/th/' : '/en/' ;
        return view('front.promotion.slider-width-preview',$data);
    }
    public function proSliderPreview($id)
    {   
        try {
             $slider = promotionSlider::find($id);
        } catch (\Exception $e) {
            Log::error("[Front] PromotionController@proSliderPreview : ".$e->getMessage());
            return redirect('notfound');
        }
       

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
        $data['lang'] = (App::getLocale()=='th') ? '/th/' : '/en/' ;
        return view('front.home.slider-sub-preview',$data);
    }

    public function proBannerPreview($id)
    {   
        try {
            $promotionBanner = promotionBanner::limit(1)->get();
        } catch (\Exception $e) {
            Log::error("[Front] PromotionController@proBannerPreview : ".$e->getMessage());
            return redirect('notfound');
        }
      
        $data['banners'] = $promotionBanner;
          $data['lang'] = (App::getLocale()=='th') ? '/th/' : '/en/' ;
        return view('front.promotion.banner-preview',$data);
    }
}
