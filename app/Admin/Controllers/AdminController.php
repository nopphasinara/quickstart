<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin')->except([
          'login',
          'logout',
          'passwordReset',
          'authenticate',
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        $request = request();
        $session = $request->getSession();
        $previousUrl = $session->previousUrl();
        if ($request->url() == $previousUrl) {
          $previousUrl = $this->redirectTo();
        }
        // echo '<pre>'; print_r($session->previousUrl()); echo '</pre>';
        // echo '<pre>'; print_r(get_class_methods($session)); echo '</pre>';
        // echo '<pre>'; print_r(request()->getSession()); echo '</pre>';

        return view('admin.login')->with([
          'redirect_to' => $previousUrl,
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function passwordReset()
    {
        return view('admin.password-reset');
    }

    /**
     * Where to redirect users after login.
     *
     * @return Illuminate\Support\Facades\Redirect
     */
    protected function redirectTo()
    {
        return '/admin';
    }
}
