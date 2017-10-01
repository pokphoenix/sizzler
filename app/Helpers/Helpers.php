<?php


if (! function_exists('set_active')) {
    function set_active ($route)
    {
       
        if(is_array($route))
        {
            return in_array(Request::path(), $route) ? 'active' : '';
        }
        $url = Request::path() ;
        $url = str_replace('/create' ,'' , $url);
        // 

        if (strstr($url,'/edit')){
            $url = str_replace('/edit' ,'' , $url);
            $ep =  explode('/', $url);
            $last = last($ep);
            $url = str_replace('/'.$last, '' ,  $url);
        }
        return $active = ($url==$route) ? 'active' : ''; ;
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
    function urlSortBy($page,$by,$type,$search,$route=null)
    {
        if (isset($route)){
            $url = route( Route::currentRouteName(), [ $route, 'page'=> $page ,'search'=>$search,'sortby' => $by, 'type' => $type]) ;
        }else{
            $url = route( Route::currentRouteName(), ['page'=> $page ,'search'=>$search,'sortby' => $by, 'type' => $type]) ;
        }
    	return $url;
    }
}

if (! function_exists('redirectBack')) {
    function redirectBack($message,$error,$url,$request=null)
    {
        $redirect = redirect()->to($url);
        if(isset($request)){
            $redirect->withInput($request);
        }
        $redirect->withErrors($message, $error );
        return  $redirect ;
    }
}
if (! function_exists('redirectFlash')) {
    function redirectFlash($message,$url,$type=null)
    {
        if (isset($type)){
            session()->flash($type,$message);
        }else{
            session()->flash('message',$message);
        }
        
        return redirect($url);
    }
}

if (! function_exists('uploadfile')) {
    function uploadfile($request,$name,$resize=null)
    {
        $result = ['result'=>true,'error'=>''];
        if ($request->hasFile($name)) {
            $file = $request->file($name);
            if(is_array($file)){ 
                foreach ($request->file($name) as $key => $file) {
                    $fileArray = array('image' => $file);
                    $rules = array(
                      'image' => 'mimes:jpeg,jpg,png|max:2048' // max 10000kb
                    );
                    $validator = Validator::make($fileArray, $rules);
                    if ($validator->fails())
                    {
                        $result['result'] = false;
                        $result['error'] = $validator->errors()->getMessages() ;
                    }else{
                        $folderName = UPLOAD_PATH.date('Ym') ;
                        $fileName = time().'_'.$file->getClientOriginalName();
                        if (!is_dir(public_path('storage/'.$folderName))) {
                            File::makeDirectory(public_path('storage/'.$folderName),0777,true);  
                        }

                        if(isset($resize)){
                            // Storage::disk('local')->makeDirectory($folderName);
                            $image_resize = Image::make($file->getRealPath());            
                            $image_resize->resize($resize['w'], $resize['h']);
                            $image_resize->save(public_path('storage/'.$folderName.'/'.$fileName));
                            $imageName = str_replace(UPLOAD_PATH,'',$folderName.'/'.$fileName) ;
                            $result['imagePath'][$key] = $imageName ;
                        }else{
                            $image_resize = Image::make($file->getRealPath());            
                            $image_resize->save(public_path('storage/'.$folderName.'/'.$fileName));
                            $imageName = str_replace(UPLOAD_PATH,'',$folderName.'/'.$fileName) ;
                            // $path = $file->storeAs($folderName,$fileName);
                            // $imageName = str_replace(UPLOAD_PATH,'',$path) ;
                            $result['imagePath'][$key] = $imageName ;
                        }

                      
                    }
                }
            }else{
                $fileArray = array('image' => $file);
                $rules = array(
                  'image' => 'mimes:jpeg,jpg,png|max:2048' // max 10000kb
                );
                $validator = Validator::make($fileArray, $rules);
                if ($validator->fails())
                {
                    $result['result'] = false;
                    $result['error'] = $validator->errors()->getMessages() ;
                }else{
                    $folderName = UPLOAD_PATH.date('Ym') ;
                    $fileName = time().'_'.$request->$name->getClientOriginalName();
                    if (!is_dir(public_path('storage/'.$folderName))) {
                        File::makeDirectory(public_path('storage/'.$folderName),0777,true);  
                    }
                    if(isset($resize)){
                        // Storage::disk('local')->makeDirectory($folderName);
                        $image_resize = Image::make($file->getRealPath());            
                        $image_resize->resize($resize['w'], $resize['h']);
                        $image_resize->save(public_path('storage/'.$folderName.'/'.$fileName));
                        $imageName = str_replace(UPLOAD_PATH,'',$folderName.'/'.$fileName) ;
                        $result['imagePath'] = $imageName ;
                    }else{
                        $image_resize = Image::make($file->getRealPath());            
                        $image_resize->save(public_path('storage/'.$folderName.'/'.$fileName));
                        $imageName = str_replace(UPLOAD_PATH,'',$folderName.'/'.$fileName) ;

                        // var_dump($folderName);
                        // $path = $file->storeAs($folderName,$fileName);
                        // dd($path);
                        // $imageName = str_replace(UPLOAD_PATH,'',$path) ;
                        $result['imagePath'] = $imageName ;
                    }
                }
               
            }
        }
        return $result;
    }
}