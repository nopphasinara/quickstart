<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

use Auth;

class PageController extends Controller
{
    protected $pagename;

    public function __construct()
    {
      $request = request();
      $route = request()->route();
      $this->pagename = explode('.', $route->getName(), 2)[1];

      View::share([
        'pagename' => $this->pagename,
      ]);
    }

    public function index()
    {
      // echo '<pre>'; print_r(request()->instance()->route()->parameters()); echo '</pre>';
      // echo '<pre>'; print_r(request()->instance()->route()->uri()); echo '</pre>';
      // echo '<pre>'; print_r(request()->instance()->route()->getName()); echo '</pre>';
      // echo '<pre>'; print_r(request()->instance()->route()->getPrefix()); echo '</pre>';
      // echo '<pre>'; print_r(request()->instance()->getUriForPath('/admin')); echo '</pre>';
      // echo '<pre>'; print_r(request()->instance()->allFiles()); echo '</pre>';
      // echo '<pre>'; print_r(request()->instance()->getHttpHost()); echo '</pre>';
      // echo '<pre>'; print_r(request()->instance()->getRequestUri()); echo '</pre>';
      // echo '<pre>'; print_r(request()->instance()->getClientIp()); echo '</pre>';
      // echo '<pre>'; print_r(get_class_methods(request()->instance()->route())); echo '</pre>';
      // echo '<pre>'; print_r(get_class_methods(request()->instance())); echo '</pre>';
      // echo '<pre>'; print_r(get_class_vars(request())); echo '</pre>';
      // echo '<pre>'; print_r(get_class_methods(request())); echo '</pre>';

      if (!Auth::check()) {
        return redirect(route('admin.login'));
      }

      return view('admin.dashboard')->with([
        'user' => Auth::user(),
      ]);
    }

    public function login()
    {
      return view('admin.login');
    }
}
