<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
class Localization
{
    /**
    * Handle an incoming request.
    *
    * @param  Request  $request
    * @param  Closure  $next
    * @return mixed
    */
    public function handle(Request $request, Closure $next): mixed
    {
        if ($request->session()->has('locale')) {
            app()->setLocale($request->session()->get('locale'));
        }
        return $next($request);
    }
}
