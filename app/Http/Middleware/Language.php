<?php

namespace App\Http\Middleware;
use Carbon\Carbon;
use App;
use Config;
use Closure;
use Session;
class Language 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       if (Session::has('applocale')) {
            App::setLocale(Session::get('applocale'));
        }
        else { // This is optional as Laravel will automatically set the fallback language if there is none specified
            App::setLocale('th');
        }
        return $next($request);
    }
}
