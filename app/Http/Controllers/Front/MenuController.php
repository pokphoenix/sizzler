<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\menu;
use App\Models\menuDetail;
use Illuminate\Support\Facades\Log;
use App;
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

    public function menu($url,$preview=null)
    {   

        // echo " local [ ".App::getLocale()." ]<BR>";

        try {
            $category = (isset($preview)) ?  menu::where('menus.id',$url)->join('categorys','categorys.id','=','menus.category_id')->select('categorys.thumbnail_th','categorys.thumbnail_en','menus.id','menus.category_id')->first()
             : category::where('slug',$url)->first();



            if (is_null($category)){
                Log::error("[Front] MenuController@menu : notfound public category ");
                return redirect('notfound');
            }
            $menu = (isset($preview)) ? $category->images : menu::where('category_id',$category->id)->where('status',1)->first()->images  ;
        } catch (\Exception $e) {
            Log::error("[Front] MenuController@menu : ".$e->getMessage());
            return redirect('notfound');
        }   
        $data['data'] = $menu ;


        $categoryId =  (isset($preview)) ? $category->category_id : $category->id ;

        switch ($categoryId) {
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
        try {

            $beefCate = category::find(4);
            $data['beefCate'] = $beefCate  ;
            $beef = menu::where('category_id',$beefCate->id)->where('status',1)->first()->images ;
            $data['beef'] = $beef  ;

            $burger = menu::where('category_id',5)->where('status',1)->first()->images;
            $data['burger'] = $burger  ;

            $chickenCate = category::find(2);
            $data['chickenCate'] = $chickenCate ; 
            $chicken = menu::where('category_id',$chickenCate->id)->where('status',1)->first()->images;
            $data['chicken'] = $chicken ;

            $kidmenuCate = category::find(6);
            $data['kidmenuCate'] = $kidmenuCate  ; 
            $kidmenu =  menu::where('category_id',$kidmenuCate->id)->where('status',1)->first()->images;
            $data['kidmenu'] = $kidmenu  ;

            $porkCate = category::find(1);
            $data['porkCate'] = $porkCate  ;
            $pork =  menu::where('category_id',$porkCate->id)->where('status',1)->first()->images;
            $data['pork'] = $pork  ;

            $seafoodCate = category::find(3);
            $data['seafoodCate'] = $seafoodCate  ;     
            $seafood =  menu::where('category_id',$seafoodCate->id)->where('status',1)->first()->images;
            $data['seafood'] = $seafood  ;
        } catch (\Exception $e) {
            Log::error("[Front] MenuController@menu : ".$e->getMessage());
            return redirect('notfound');
        }
        return view('front.menu.index',$data);
    } 
    public function combination()
    {   
        // $query = category::find(3)->menu()->get();
        // $data['data'] = $query  ;
        return view('front.menu.combination');
    }
   
}
