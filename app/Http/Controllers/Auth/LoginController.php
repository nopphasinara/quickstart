<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Where to redirect users after login.
     *
     * @return Illuminate\Support\Facades\Redirect
     */
    protected function redirectTo()
    {
        // echo '<pre>'; print_r(request()->getSession()->all()); echo '</pre>';
        // echo '<pre>'; print_r(request()->getSession()->previousUrl()); echo '</pre>';
        // echo '<pre>'; print_r(request()->hasPreviousSession()); echo '</pre>';
        // echo '<pre>'; print_r(get_class_methods(request()->getSession())); echo '</pre>';
        // echo '<pre>'; print_r(get_class_methods(request())); echo '</pre>';
        // dd($request);

        $input = request()->all();
        // echo '<pre>'; print_r($input); echo '</pre>';
        // dd("");
        return ($input['redirect_to']) ? $input['redirect_to'] : '/';
    }
}
