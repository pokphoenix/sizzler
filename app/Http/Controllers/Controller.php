<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // try{
           
    //     }catch (Illuminate\Database\QueryException $e){
    // $e->getMessage()
    //         $error_code = $e->errorInfo[1];
    //         if($error_code == 1062){
    //             self::delete($lid);
    //             return 'houston, we have a duplicate entry problem';
    //         }
    //     }

}
