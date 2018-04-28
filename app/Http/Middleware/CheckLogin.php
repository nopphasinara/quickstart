<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckLogin
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
        // echo '<pre>'; print_r($r->path()); echo '</pre>';
        // echo '<pre>'; print_r($r->route()->getPrefix()); echo '</pre>';
        // echo '<pre>'; print_r($r->route()->getName()); echo '</pre>';
        // echo '<pre>'; print_r($r->route()->getActionName()); echo '</pre>';
        // echo '<pre>'; print_r($r->route()->getAction()); echo '</pre>';
        // echo '<pre>'; print_r(get_class_methods($r->route())); echo '</pre>';
        // echo '<pre>'; print_r(get_class_methods($request)); echo '</pre>';
        // echo '<pre>'; print_r($request); echo '</pre>';
        // echo '<pre>'; print_r($request->routeIs('admin.dashboard')); echo '</pre>';

        if (!Auth::check()) {
          return redirect(route('admin.login'));
        }

        return $next($request);
    }
}
