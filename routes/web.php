<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/sbadmin', function () {
//     return view('admin.home');
// });

// // Route::get('/admin', function () {
// //     return view('admin.home');
// // });

// Route::get('/login', function () {
//     return view('admin.auth.login');
// });

// Route::get('/charts', function () {
//     return View::make('admin.charts');
// });

// Route::get('/tables', function () {
//     return View::make('admin.table');
// });

// Route::get('/forms', function () {
//     return View::make('admin.form');
// });

// Route::get('/grid', function () {
//     return View::make('admin.grid');
// });

// Route::get('/buttons', function () {
//     return View::make('admin.buttons');
// });

// Route::get('/icons', function () {
//     return View::make('admin.icons');
// });

// Route::get('/panels', function () {
//     return View::make('admin.panel');
// });

// Route::get('/typography', function () {
//     return View::make('admin.typography');
// });

// Route::get('/notifications', function () {
//     return View::make('admin.notifications');
// });

// Route::get('/blank', function () {
//     return View::make('admin.blank');
// });

// Route::get('/documentation', function () {
//     return View::make('admin.documentation');
// });

// Route::get('/stats', function() {
//    return View::make('admin.stats');
// });

// Route::get('/progressbars', function() {
//     return View::make('admin.progressbars');
// });

// Route::get('/collapse', function() {
//     return View::make('admin.collapse');
// });

Auth::routes();


// Route::get('storage/upload/{folder}/{filename}', function ($folder,$filename)
// {
//     echo "$folder,$filename" ; die();
//     $path = storage_path('public/' . $filename);
//     dd($path);
//     if (!File::exists($path)) {
//         abort(404);
//     }

//     $file = File::get($path);
//     $type = File::mimeType($path);

//     $response = Response::make($file, 200);
//     $response->header("Content-Type", $type);

//     return $response;
// });

 Route::get('/policy/', 'HomeController@policy');


Route::get('storage', 'HomeController@storage');
Route::group(['middleware' => ['web','language'] ], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/menu/{id}', 'HomeController@menu');
    // Route::get('/language/{type}', 'HomeController@language');
    Route::get('/category/{id}', 'HomeController@category');

    Route::get('/career', 'HomeController@career');
    Route::get('/location', 'HomeController@location');
    Route::get('/promotion', 'HomeController@promotion');
    Route::get('/promotion/{id}', 'HomeController@promotionView');
    Route::get('/media', 'HomeController@media');
    Route::get('/media/{id}', 'HomeController@mediaView') ;
    Route::get('/story', 'HomeController@story');
    Route::get('/about', 'HomeController@about');
    Route::get('/career', 'HomeController@career');
    Route::get('/contact', 'HomeController@contact');
    Route::get('/international', 'HomeController@international');


    Route::get('/menu', 'HomeController@mainMenu');
    Route::get('/beef', 'HomeController@beef');
    Route::get('/burger', 'HomeController@burger');
    Route::get('/chicken', 'HomeController@chicken');
    Route::get('/com-beef', 'HomeController@comBeef');
    Route::get('/com-platter', 'HomeController@comPlatter');
    Route::get('/com-suprem', 'HomeController@comSuprem');
    Route::get('/kidmenu', 'HomeController@kidmenu');
    Route::get('/pork', 'HomeController@pork');
    Route::get('/seafood', 'HomeController@seafood');
    Route::get('/combination', 'HomeController@combination');
    Route::get('/wednesday', 'HomeController@wednesday');
    Route::get('/everyday', 'HomeController@everyday');
    Route::get('/lunch', 'HomeController@lunch');


    Route::get('/healthtip/', 'HomeController@healthtip');
    Route::get('/healthtip/{id}', 'HomeController@healthtipView');
    Route::get('/healthtip-preview/{id}', 'HomeController@healthtipPreview');

    Route::get('/release/', 'HomeController@release');
    Route::get('/release/{id}', 'HomeController@releaseView');
    Route::get('/release-preview/{id}', 'HomeController@releasePreview');


});

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'HomeController@switchLang']);




Route::get('/location-data', 'HomeController@locationData');


// Route::get('/career', 'HomeController@career');
// Route::get('/career', 'HomeController@career');
// Route::get('/category/{id}', 'HomeController@category');
// Route::get('/category/{id}', 'HomeController@category');
// Route::get('/category/{id}', 'HomeController@category');


Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login')->name('admin.login');
Route::post('admin-logout', 'Admin\LoginController@logout')->name('logout');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::group(['namespace'=>'Back'  ,   'middleware' => ['web','auth:admin'] ,'prefix' => 'admin' ], function () {
    Route::get('category/position', 'CategoryController@position')->name('category-position');
    Route::post('category/position', 'CategoryController@positionStore');
    Route::resource('category', 'CategoryController');

    Route::resource('location', 'LocationController');

    Route::get('menu/position', 'MenusController@position')->name('menu-position');
    Route::post('menu/position', 'MenusController@positionStore');
    Route::resource('menu', 'MenusController');

    Route::get('media-category/position', 'MediaCategoryController@position')->name('media-category-position');
    Route::post('media-category/position', 'MediaCategoryController@positionStore');
    Route::resource('media-category', 'MediaCategoryController');

    Route::get('media/position', 'MediaController@position')->name('media-position');
    Route::post('media/position', 'MediaController@positionStore');
    Route::resource('media', 'MediaController');

    Route::get('slider/position', 'SliderController@position')->name('slider-position');
    Route::post('slider/position', 'SliderController@positionStore');
    Route::resource('slider', 'SliderController'); 

    Route::get('slider-sub/position', 'SliderSubController@position')->name('slider-sub-position');
    Route::post('slider-sub/position', 'SliderSubController@positionStore');
    Route::resource('slider-sub', 'SliderSubController'); 

    Route::get('promotion-slider/position', 'PromotionSliderController@position')->name('promotion-slider-position');
    Route::post('promotion-slider/position', 'PromotionSliderController@positionStore');
    Route::resource('promotion-slider', 'PromotionSliderController'); 

    Route::get('promotion-slider-sub/position', 'PromotionSliderSubController@position')->name('promotion-slider-position');
    Route::post('promotion-slider-sub/position', 'PromotionSliderSubController@positionStore');
    Route::resource('promotion-slider-sub', 'PromotionSliderSubController');

    Route::get('promotion/position', 'PromotionController@position')->name('promotion-position');
    Route::post('promotion/position', 'PromotionController@positionStore');
    Route::resource('promotion', 'PromotionController');

    Route::get('banner/position', 'BannerController@position')->name('banner-position');
    Route::post('banner/position', 'BannerController@positionStore');
    Route::resource('banner', 'BannerController'); 

    Route::get('promotion-banner/position', 'PromotionBannerController@position')->name('promotion-banner-position');
    Route::post('promotion-banner/position', 'PromotionBannerController@positionStore');
    Route::resource('promotion-banner', 'PromotionBannerController');

    Route::get('healthtip/position', 'HealthTipController@position')->name('healthtip-position');
    Route::post('healthtip/position', 'HealthTipController@positionStore');
    Route::delete('healthtip/image/{id}', 'HealthTipController@deleteimage');
    Route::resource('healthtip', 'HealthTipController');   

    Route::get('release/position', 'ReleaseController@position')->name('release-position');
    Route::post('release/position', 'ReleaseController@positionStore');
    Route::delete('release/image/{id}', 'ReleaseController@deleteimage');
    Route::resource('release', 'ReleaseController');

    Route::get('homeview/position', 'HomeViewController@position')->name('homeview-position');
    Route::post('homeview/position', 'HomeViewController@positionStore');

    Route::resource('homeview', 'HomeViewController');

    Route::resource('beef', 'BeefController');
    Route::resource('burger', 'BurgerController');
    Route::resource('chicken', 'ChickenController');
    Route::resource('com-beef', 'ComBeefController');
    Route::resource('com-platter', 'ComPlatterController');
    Route::resource('com-suprem', 'ComSupremController');
    Route::resource('kid', 'KidMenuController');
    Route::resource('pork', 'PorkController');
    Route::resource('seafood', 'SeafoodController');
    Route::resource('wednesday', 'WednesdayController');
    Route::resource('everyday', 'EverydayController');
    Route::resource('lunch', 'LunchController');
});
