<?php

namespace App\Http\Controllers;

use App;
use App\Http\Requests\ContactValidate;
use App\Models\banner;
use App\Models\contact;
use App\Models\healthtip;
use App\Models\location;
use App\Models\slider;
use App\Models\slidersub;
use Config;
use DB;
use Illuminate\Http\Request;
use Redirect;
use Session;
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
        $sliderSub = slidersub::where('position','<',3)->where('status',1)->get();
        $banner = banner::limit(1)->where('status',1)->get();
        $healthtip = healthtip::where('position','<=',4)->get();
        if (count($sliderSub)<2){
            
            
            $latest = [[  "id" => 0 
                        ,"url" => ''
                        ,"name_th" => "dummy"
                        ,"name_en" => "dummy"
                        ,"img_th" => null
                        ,"img_en" => null]] ;
            // dd($latest);
            $sliderSub =  array_merge($sliderSub->toArray(),$latest) ;
            
        }

        $data['sliderMains'] = $sliderMains  ;
        $data['sliderSub'] = $sliderSub  ;
        $data['banners'] = $banner  ;
        $data['healthtip'] = $healthtip  ;
        return view('front.home.index',$data);
    } 

    public function category($id)
    {   
        $data = category::find($id);
        $data['data'] = $data  ;
        dd($data);
        return view('front.category',$data);
    }

    public function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('applocale', $lang);
        }
        return Redirect::back();
    }
    public function location()
    {   
        $query = DB::table('location')->where('status',1)
                ->join('provinces', 'provinces.id', '=','location.province_id')
                ->get();
        $response = [];
        foreach ($query as $key => $q) {
            if(App::getLocale()=='th'){
                $response[$key]['province'] = $q->province_name_th ;
                $response[$key]['name'] = $q->name_th ;
                $response[$key]['address'] = $q->address_th ;
            }else{
                $response[$key]['province'] = $q->province_name_en ;
                $response[$key]['name'] = $q->name_en ;
                $response[$key]['address'] = $q->address_en ;
            }
            $response[$key]['tel'] = $q->tel ;
            $response[$key]['lat'] = $q->lat ;
            $response[$key]['lng'] = $q->lng ;
        }
        $data['data'] = $response[0] ;
        // dd($data);
        $data['json'] = json_encode( $response , JSON_UNESCAPED_UNICODE);
        return view('front.location',$data);
    }
    
    public function about()
    {   
        return view('front.about');
    }
    public function career()
    {   
        return view('front.career');
    }
    public function contact()
    {   

        $data['action'] = 'home/contact';

        return view('front.contact',$data);
    }

    public function sendmail(ContactValidate $request)
    {   
        $post = $request->all();
        $contact['name'] = $post['contact-name'] ; 
        $contact['tel'] = $post['contact-tel'] ; 
        $contact['email'] = $post['contact-email'] ; 
        $contact['message'] = $post['contact-message'] ; 
        // contact::create($contact);
        return view('front.thank_contact');
    }

    public function international()
    {   
        return view('front.international');
    }
    public function story()
    {   
        return view('front.story');
    }
    public function policy()
    {   
        return view('front.policy');
    }
    public function notfound()
    {   
        return view('notfound');
    }


    public function sliderPreview($id)
    {   
        $slider= slider::find($id);
        $data['data'] =  $slider;
        return view('front.home.slider-preview',$data);
    }  

    public function sliderSubPreview($id)
    {   
        $slider= slidersub::find($id);

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

}
