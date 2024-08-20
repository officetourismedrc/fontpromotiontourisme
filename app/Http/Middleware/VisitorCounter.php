<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Admin\Sitestat;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class VisitorCounter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $data = ['token'=>$request->session()->get('_token', Str::random(10).Carbon::now().$request->ip() ),
                  'ip'=>$request->ip(),
                  'user_agent'=>$_SERVER['HTTP_USER_AGENT'],
                  'path_visited' => $_SERVER['REQUEST_URI']];
       // Sitestat::create($data);

        return $next($request);
    }
}
