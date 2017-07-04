<?php

if (! function_exists('baseUrl')) {
    function baseUrl($url)
    {
        return Config::get('constants.base_url').$url ;
    }
}

if (! function_exists('sortBy')) {
    function sortBy($title,$page,$by,$type,$nextType)
    {
//   	$pos = strpos($mystring, $findme);
		// if ($pos !== false) {
		//      echo "The string '$findme' was found in the string '$mystring'";
		//          echo " and exists at position $pos";
		// } else {
		//      echo "The string '$findme' was not found in the string '$mystring'";
		// }
    	$class = ($type=='asc') ? 'fa-sort-alpha-asc' : 'fa-sort-alpha-desc'  ;

    	echo  "<a class=\"btn btn-xs btn-default\" href=\"".urlSortBy($page,$by,$nextType)."\"> ".$title." <i class=\"fa  $class \"></i></a>";
    	die();
    	// return asset(Route::currentRouteName()."?page=$page&sortby=$by&type=$type") ;
        // return asset(Route::currentRouteName()) ;
    }
}
if (! function_exists('urlSortBy')) {
    function urlSortBy($page,$by,$type,$search)
    {
    	return route(Route::currentRouteName(), ['page'=> $page ,'search'=>$search,'sortby' => $by, 'type' => $type]) ;
    }
}
if (! function_exists('uploadfile')) {
    function uploadfile($request,$name)
    {
         $result = ['result'=>true,'error'=>''];

        if ($request->hasFile($name)) {
            $file = $request->file($name) ;
            $fileArray = array('image' => $file);
            $rules = array(
              'image' => 'mimes:jpeg,jpg,png|max:1024' // max 10000kb
            );
            $validator = Validator::make($fileArray, $rules);
            if ($validator->fails())
            {
                $result['result'] = false;
                $result['error'] = $validator->errors()->getMessages() ;
            }else{
                $folderName = UPLOAD_PATH.date('Ym') ;
            	$fileName = time().'_'.$request->$name->getClientOriginalName();
                $path = $request->$name->storeAs($folderName,$fileName);
                $imageName = str_replace(UPLOAD_PATH,'',$path) ;
                $result['imagePath'] = $imageName ;
            }
        }else{
            $result['result'] = false;
            $result['error'] = 'not found image' ;
        }
        return $result;
    }
}