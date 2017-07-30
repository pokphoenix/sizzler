<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\menu;

class MenuController extends Controller
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

    public function menu($url)
    {   


        $category = category::where('slug',$url)->first();
        if (is_null($category)){
            return redirect('notfound');
        }
        $data['data'] = $category->menu()->get() ;
        switch ($category->id) {
            case 1:
                $data['porkCate'] = $category ; 
                $view = 'front.menu.pork' ;
                break;
            case 2:
                $data['chickenCate'] = $category ; 
                $view = 'front.menu.chicken' ;
                break;
            case 3:
                $data['seafoodCate'] = $category ; 
                $view = 'front.menu.seafood' ;
                break;
            case 4:
                $data['beefCate'] =  $category  ;
                $view = 'front.menu.beef' ;
                break;
            case 5:
                $view = 'front.menu.burger' ;
                break;
            case 6:
                $data['kidmenuCate'] = $category ; 
                $view = 'front.menu.kidmenu' ;
                break;
            case 7:
                $view = 'front.menu.com_beef' ;
                break;
            case 8:
                $view = 'front.menu.com_suprem' ;
                break;
            case 9:
                $view = 'front.menu.com_platter' ;
                break;
            case 10:
                $data['porkCate'] = $category ; 
                $view = 'front.menu.pork' ;
                break;
            case 11:
                $view = 'front.menu.wednesday' ;
                break;
            case 12:
                $view = 'front.menu.everyday' ;
                break;
            case 13:
                $view = 'front.menu.lunch' ;
                break;

        }
        return view($view,$data);
    }

    public function mainMenu()
    {   
        $beefCate = category::find(4);
        $data['beefCate'] = $beefCate  ;
        $beef = $beefCate->menu()->get();
        $data['beef'] = $beef  ;

        $burger = category::find(5)->menu()->get();
        $data['burger'] = $burger  ;

        $chickenCate = category::find(2);
        $data['chickenCate'] = $chickenCate ; 
        $chicken = $chickenCate->menu()->get();
        $data['chicken'] = $chicken ;

        $kidmenuCate = category::find(6);
        $data['kidmenuCate'] = $kidmenuCate  ; 
        $kidmenu = $kidmenuCate->menu()->get();
        $data['kidmenu'] = $kidmenu  ;

        $porkCate = category::find(1);
        $data['porkCate'] = $porkCate  ;
        $pork = $porkCate->menu()->get();
        $data['pork'] = $pork  ;

        $seafoodCate = category::find(3);
        $data['seafoodCate'] = $seafoodCate  ;     
        $seafood = $seafoodCate->menu()->get();
        $data['seafood'] = $seafood  ;
        return view('front.menu.index',$data);
    } 
    public function combination()
    {   
        // $query = category::find(3)->menu()->get();
        // $data['data'] = $query  ;
        return view('front.menu.combination');
    }
    public function beef()
    {   
        $beefCate = category::find(4);
        $data['beefCate'] = $beefCate  ;
        $beef = $beefCate->menu()->get();
        $data['data'] = $beef  ;
        return view('front.menu.beef',$data);
    }
     public function burger()
    {   
        $query = category::find(5)->menu()->get();
        $data['data'] = $query  ;
        return view('front.menu.burger',$data);
    }
     public function chicken()
    {   
        $chickenCate = category::find(2);
        $data['chickenCate'] = $chickenCate ; 
        $chicken = $chickenCate->menu()->get();
        $data['data'] = $chicken ;
        return view('front.menu.chicken',$data);
    }
    
     public function kidmenu()
    {   
        $kidmenuCate = category::find(6);
        $data['kidmenuCate'] = $kidmenuCate  ; 
        $kidmenu = $kidmenuCate->menu()->get();
        $data['data'] = $kidmenu  ;
        return view('front.menu.kidmenu',$data);
    }
     public function pork()
    {   
        $porkCate = category::find(1);
        $data['porkCate'] = $porkCate  ;
        $pork = $porkCate->menu()->get();
        $data['data'] = $pork  ;
        return view('front.menu.pork',$data);
    }
     public function seafood()
    {   
        $seafoodCate = category::find(3);
        $data['seafoodCate'] = $seafoodCate  ;     
        $seafood = $seafoodCate->menu()->get();
        $data['data'] = $seafood  ;
        return view('front.menu.seafood',$data);
    } 
    public function comBeef()
    {   
        $query = category::find(7)->menu()->get();
        $data['data'] = $query  ;
        return view('front.menu.com_beef',$data);
    }
    public function comPlatter()
    {   
        $query = category::find(9)->menu()->get();
        $data['data'] = $query  ;
        return view('front.menu.com_platter',$data);
    }
     public function comSuprem()
    {   
        $query = category::find(8)->menu()->get();
        $data['data'] = $query  ;
        return view('front.menu.com_suprem',$data);
    }
  
    public function wednesday()
    {   
        $query = category::find(11)->menu()->get();
        $data['data'] = $query  ;
        return view('front.menu.wednesday',$data);
    }
    public function everyday()
    {   
        $query = category::find(12)->menu()->get();
        $data['data'] = $query  ;
        return view('front.menu.everyday',$data);
    }
    public function lunch()
    {   
        $query = category::find(13)->menu()->get();
        $data['data'] = $query  ;
        return view('front.menu.lunch',$data);
    }
}