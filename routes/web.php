<?php



Auth::routes();

Route::get('/', function () {
    return redirect('lang/th');
});

//--- Back End
Route::get('storage', 'HomeController@storage');
Route::get('/policy/', 'HomeController@policy');
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'HomeController@switchLang']);
Route::get('/location-data', 'HomeController@locationData');
Route::get('/notfound', 'HomeController@notfound');
Route::get('member', function () {
    return redirect('http://www.sizzler.co.th/e-member/');
});
Route::group(['middleware' => ['web','language']  ,'prefix' => 'en' ], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/category/{id}', 'HomeController@category');
    Route::get('/location', 'HomeController@location');
    Route::get('/career', 'HomeController@career');
    Route::get('/story', 'HomeController@story');
    Route::get('/about', 'HomeController@about');
    Route::get('/career', 'HomeController@career');
    Route::get('/contact', 'HomeController@contact');
    Route::get('/international', 'HomeController@international');
    Route::get('/home-slider-preview/{id}', 'HomeController@sliderPreview');
    Route::get('/home-slider-sub-preview/{id}', 'HomeController@sliderSubPreview');
    Route::post('/home/contact', 'HomeController@sendmail');
});

Route::group(['middleware' => ['web','language']  ,'prefix' => 'th' ], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/category/{id}', 'HomeController@category');
    Route::get('/location', 'HomeController@location');
    Route::get('/career', 'HomeController@career');
    Route::get('/story', 'HomeController@story');
    Route::get('/about', 'HomeController@about');
    Route::get('/career', 'HomeController@career');
    Route::get('/contact', 'HomeController@contact');
    Route::get('/international', 'HomeController@international');
    Route::get('/home-slider-preview/{id}', 'HomeController@sliderPreview');
    Route::get('/home-slider-sub-preview/{id}', 'HomeController@sliderSubPreview');
    Route::post('/home/contact', 'HomeController@sendmail');
});


// Route::group(['middleware' => ['web','language'] ], function () {
//     Route::get('/', 'HomeController@index');
//     // Route::get('/language/{type}', 'HomeController@language');
//     Route::get('/category/{id}', 'HomeController@category');
//     Route::get('/location', 'HomeController@location');
//     Route::get('/career', 'HomeController@career');
//     Route::get('/story', 'HomeController@story');
//     Route::get('/about', 'HomeController@about');
//     Route::get('/career', 'HomeController@career');
//     Route::get('/contact', 'HomeController@contact');
//     Route::get('/international', 'HomeController@international');
//     Route::get('/home-slider-preview/{id}', 'HomeController@sliderPreview');
//     Route::get('/home-slider-sub-preview/{id}', 'HomeController@sliderSubPreview');
//     Route::post('/home/contact', 'HomeController@sendmail');


// });




//--- Back End
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login')->name('admin.login');
Route::post('admin-logout', 'Admin\LoginController@logout')->name('logout');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::group(['namespace'=>'Back'  ,   'middleware' => ['web','auth:admin'] ,'prefix' => 'admin' ], function () {
    
    Route::put('contact/public/{id}', 'ContactController@publicStore');
    Route::resource('contact', 'ContactController'); 

    // Route::get('list', 'AdminController@index')->name('admin-list');
    Route::get('category/position', 'CategoryController@position')->name('category-position');
    Route::post('category/position', 'CategoryController@positionStore');
    Route::resource('category', 'CategoryController');

    Route::get('nopermission', 'AdminController@noPermission');


    Route::get('profile/{id}', 'AdminController@profile');
    Route::get('edit/{id}', 'AdminController@editProfile');
    Route::get('changepass/{id}', 'AdminController@changepass');
    Route::put('changepass/{id}', 'AdminController@storeChangepass');
    
    
    Route::resource('management', 'AdminController');



    Route::put('location/public/{id}', 'LocationController@publicStore');
    Route::resource('location', 'LocationController');

    // Route::get('menu/position', 'MenusController@position')->name('menu-position');
    // Route::post('menu/position', 'MenusController@positionStore');
    Route::put('menu/{category_id}/public/{id}', 'MenusController@publicStore');
    Route::get('menu/{category_id}', array('as' => 'menu', 'uses' => 'MenusController@index'));
    Route::post('menu/{category_id}', 'MenusController@store');
    Route::get('menu/{category_id}/create', 'MenusController@create');
    Route::delete('menu/{category_id}/{menu_id}', 'MenusController@destroy');
    Route::get('menu/{category_id}/{menu_id}', 'MenusController@show');
    Route::put('menu/{category_id}/{menu_id}', 'MenusController@update');
    Route::get('menu/{category_id}/{menu_id}/edit', 'MenusController@edit');



    Route::resource('menu', 'MenusController');

    Route::get('media-category/position', 'MediaCategoryController@position')->name('media-category-position');
    Route::post('media-category/position', 'MediaCategoryController@positionStore');
    Route::resource('media-category', 'MediaCategoryController');

    Route::get('media/position', 'MediaController@position')->name('media-position');
    Route::post('media/position', 'MediaController@positionStore');
    Route::put('media/public/{id}', 'MediaController@publicStore');
    Route::resource('media', 'MediaController');

    Route::get('slider/position', 'SliderController@position')->name('slider-position');
    Route::post('slider/position', 'SliderController@positionStore');
    Route::put('slider/public/{id}', 'SliderController@publicStore');
    Route::resource('slider', 'SliderController'); 

    Route::get('slider-sub/position', 'SliderSubController@position')->name('slider-sub-position');
    Route::post('slider-sub/position', 'SliderSubController@positionStore');
    Route::put('slider-sub/public/{id}', 'SliderSubController@publicStore');
    Route::resource('slider-sub', 'SliderSubController'); 

    Route::get('banner/position', 'BannerController@position')->name('banner-position');
    Route::post('banner/position', 'BannerController@positionStore');
     Route::put('banner/public/{id}', 'BannerController@publicStore');
    Route::resource('banner', 'BannerController'); 


    Route::get('promotion-slider/position', 'PromotionSliderController@position')->name('promotion-slider-position');
    Route::post('promotion-slider/position', 'PromotionSliderController@positionStore');
     Route::put('promotion-slider/public/{id}', 'PromotionSliderController@publicStore');
    Route::resource('promotion-slider', 'PromotionSliderController'); 

    Route::get('promotion-slider-sub/position', 'PromotionSliderSubController@position')->name('promotion-slider-position');
    Route::post('promotion-slider-sub/position', 'PromotionSliderSubController@positionStore');
    Route::put('promotion-slider-sub/public/{id}', 'PromotionSliderSubController@publicStore');
    Route::resource('promotion-slider-sub', 'PromotionSliderSubController');


    Route::get('promotion/position', 'PromotionController@position')->name('promotion-position');
    Route::post('promotion/position', 'PromotionController@positionStore');
    Route::put('promotion/public/{id}', 'PromotionController@publicStore');
    Route::resource('promotion', 'PromotionController');



    Route::get('promotion-banner/position', 'PromotionBannerController@position')->name('promotion-banner-position');
    Route::post('promotion-banner/position', 'PromotionBannerController@positionStore');
     Route::put('promotion-banner/public/{id}', 'PromotionBannerController@publicStore');
    Route::resource('promotion-banner', 'PromotionBannerController');

    Route::get('healthtip/position', 'HealthTipController@position')->name('healthtip-position');
    Route::post('healthtip/position', 'HealthTipController@positionStore');
    Route::put('healthtip/public/{id}', 'HealthTipController@publicStore');
    Route::delete('healthtip/image/{id}', 'HealthTipController@deleteimage');
    Route::resource('healthtip', 'HealthTipController');   

    Route::get('release/position', 'ReleaseController@position')->name('release-position');
    Route::post('release/position', 'ReleaseController@positionStore');
    Route::put('release/public/{id}', 'ReleaseController@publicStore');
    Route::delete('release/image/{id}', 'ReleaseController@deleteimage');
    Route::resource('release', 'ReleaseController');

    Route::get('homeview/position', 'HomeViewController@position')->name('homeview-position');
    Route::post('homeview/position', 'HomeViewController@positionStore');

    Route::resource('homeview', 'HomeViewController');

    // Route::resource('beef', 'BeefController');
    // Route::resource('burger', 'BurgerController');
    // Route::resource('chicken', 'ChickenController');
    // Route::resource('com-beef', 'ComBeefController');
    // Route::resource('com-platter', 'ComPlatterController');
    // Route::resource('com-suprem', 'ComSupremController');
    // Route::resource('kid', 'KidMenuController');
    // Route::resource('pork', 'PorkController');
    // Route::resource('seafood', 'SeafoodController');
    // Route::resource('wednesday', 'WednesdayController');
    // Route::resource('everyday', 'EverydayController');
    // Route::resource('lunch', 'LunchController');



});

// Route::group(['namespace'=>'Front'  , 'middleware' => ['web','language'] ], function () {
  
   

//     Route::get('/promotion', 'PromotionController@promotion');
//     Route::get('/promotion/view', 'PromotionController@promotionView');
//     Route::get('/promotion-preview/{id}', 'PromotionController@promotionPreview');
//     Route::get('/pro-slider-preview/{id}', 'PromotionController@proSliderPreview');
//     Route::get('/pro-slider-width-preview/{id}', 'PromotionController@proSliderWidthPreview');
//     Route::get('/pro-banner-preview/{id}', 'PromotionController@proBannerPreview');

//     Route::get('/media', 'MediaController@index');
//     Route::get('/media/{id}', 'MediaController@view') ;
//     Route::get('/media-preview/{id}', 'MediaController@preview') ;

//     Route::get('/release/', 'ReleaseController@release');
//     Route::get('/release/{id}', 'ReleaseController@releaseView');
//     Route::get('/release-preview/{id}', 'ReleaseController@releasePreview');

//     Route::get('/healthtip/', 'HealthtipController@healthtip');
//     Route::get('/healthtip/{id}', 'HealthtipController@healthtipView');
//     Route::get('/healthtip-preview/{id}', 'HealthtipController@healthtipPreview');

//     Route::get('/menu', 'MenuController@mainMenu');
//     Route::get('/menu/{id}/{preview}', 'MenuController@menu');
//     Route::get('/combination', 'MenuController@combination');

//     Route::get('/{url}', 'MenuController@menu');
//     // Route::get('/beef', 'MenuController@beef');
//     // Route::get('/burger', 'MenuController@burger');
//     // Route::get('/chicken', 'MenuController@chicken');
//     // Route::get('/com-beef', 'MenuController@comBeef');
//     // Route::get('/com-platter', 'MenuController@comPlatter');
//     // Route::get('/com-suprem', 'MenuController@comSuprem');
//     // Route::get('/kidmenu', 'MenuController@kidmenu');
//     // Route::get('/pork', 'MenuController@pork');
//     // Route::get('/seafood', 'MenuController@seafood');
   
//     // Route::get('/wednesday', 'MenuController@wednesday');
//     // Route::get('/everyday', 'MenuController@everyday');
//     // Route::get('/lunch', 'MenuController@lunch');

// });
Route::group(['namespace'=>'Front'  , 'middleware' => ['web','language'] ,'prefix' => 'th' ], function () {
  
   

    Route::get('/promotion', 'PromotionController@promotion');
    Route::get('/promotion/view', 'PromotionController@promotionView');
    Route::get('/promotion-preview/{id}', 'PromotionController@promotionPreview');
    Route::get('/pro-slider-preview/{id}', 'PromotionController@proSliderPreview');
    Route::get('/pro-slider-width-preview/{id}', 'PromotionController@proSliderWidthPreview');
    Route::get('/pro-banner-preview/{id}', 'PromotionController@proBannerPreview');

    Route::get('/media', 'MediaController@index');
    Route::get('/media/{id}', 'MediaController@view') ;
    Route::get('/media-preview/{id}', 'MediaController@preview') ;

    Route::get('/release/', 'ReleaseController@release');
    Route::get('/release/{id}', 'ReleaseController@releaseView');
    Route::get('/release-preview/{id}', 'ReleaseController@releasePreview');

    Route::get('/healthtip/', 'HealthtipController@healthtip');
    Route::get('/healthtip/{id}', 'HealthtipController@healthtipView');
    Route::get('/healthtip-preview/{id}', 'HealthtipController@healthtipPreview');

    Route::get('/menu', 'MenuController@mainMenu');
    Route::get('/menu/{id}/{preview}', 'MenuController@menu');
    Route::get('/combination', 'MenuController@combination');

    Route::get('/{url}', 'MenuController@menu');
    // Route::get('/beef', 'MenuController@beef');
    // Route::get('/burger', 'MenuController@burger');
    // Route::get('/chicken', 'MenuController@chicken');
    // Route::get('/com-beef', 'MenuController@comBeef');
    // Route::get('/com-platter', 'MenuController@comPlatter');
    // Route::get('/com-suprem', 'MenuController@comSuprem');
    // Route::get('/kidmenu', 'MenuController@kidmenu');
    // Route::get('/pork', 'MenuController@pork');
    // Route::get('/seafood', 'MenuController@seafood');
   
    // Route::get('/wednesday', 'MenuController@wednesday');
    // Route::get('/everyday', 'MenuController@everyday');
    // Route::get('/lunch', 'MenuController@lunch');

});

Route::group(['namespace'=>'Front'  , 'middleware' => ['web','language'] ,'prefix' => 'en' ], function () {
  
   

    Route::get('/promotion', 'PromotionController@promotion');
    Route::get('/promotion/view', 'PromotionController@promotionView');
    Route::get('/promotion-preview/{id}', 'PromotionController@promotionPreview');
    Route::get('/pro-slider-preview/{id}', 'PromotionController@proSliderPreview');
    Route::get('/pro-slider-width-preview/{id}', 'PromotionController@proSliderWidthPreview');
    Route::get('/pro-banner-preview/{id}', 'PromotionController@proBannerPreview');

    Route::get('/media', 'MediaController@index');
    Route::get('/media/{id}', 'MediaController@view') ;
    Route::get('/media-preview/{id}', 'MediaController@preview') ;

    Route::get('/release/', 'ReleaseController@release');
    Route::get('/release/{id}', 'ReleaseController@releaseView');
    Route::get('/release-preview/{id}', 'ReleaseController@releasePreview');

    Route::get('/healthtip/', 'HealthtipController@healthtip');
    Route::get('/healthtip/{id}', 'HealthtipController@healthtipView');
    Route::get('/healthtip-preview/{id}', 'HealthtipController@healthtipPreview');

    Route::get('/menu', 'MenuController@mainMenu');
    Route::get('/menu/{id}/{preview}', 'MenuController@menu');
    Route::get('/combination', 'MenuController@combination');

    Route::get('/{url}', 'MenuController@menu');
    // Route::get('/beef', 'MenuController@beef');
    // Route::get('/burger', 'MenuController@burger');
    // Route::get('/chicken', 'MenuController@chicken');
    // Route::get('/com-beef', 'MenuController@comBeef');
    // Route::get('/com-platter', 'MenuController@comPlatter');
    // Route::get('/com-suprem', 'MenuController@comSuprem');
    // Route::get('/kidmenu', 'MenuController@kidmenu');
    // Route::get('/pork', 'MenuController@pork');
    // Route::get('/seafood', 'MenuController@seafood');
   
    // Route::get('/wednesday', 'MenuController@wednesday');
    // Route::get('/everyday', 'MenuController@everyday');
    // Route::get('/lunch', 'MenuController@lunch');

});