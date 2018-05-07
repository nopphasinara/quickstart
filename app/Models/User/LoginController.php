<?php

namespace App\Models\User;

use Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request, AuthenticationException $exception)
    {
        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     // Authentication passed...
        //     return redirect()->intended('homepage');
        // }
        
        if (Auth::attempt([
            'email' => 'admin@aadmin.com',
            'password' => 'secret',
        ], $request->get('remember'))) {
            // The user is active, not suspended, and exists.
            return redirect()->intended('homepage');
        } else {
          $this::sendFailedLoginResponse($request);
        }
        
        // {
        //   // echo '<pre>'; print_r($exception->getCode()); echo '</pre>';
        //   // echo '<pre>'; print_r($exception->getMessage()); echo '</pre>';
        //   // echo '<pre>'; print_r($exception->getFile()); echo '</pre>';
        //   // echo '<pre>'; print_r($exception->getLine()); echo '</pre>';
        //   // echo '<pre>'; print_r($exception->getPrevious()); echo '</pre>';
        //   // echo '<pre>'; print_r(get_class_vars(get_class($exception))); echo '</pre>';
        //   // echo '<pre>'; print_r(get_class_methods($exception)); echo '</pre>';
        // }
        
        // if (Auth::viaRemember()) {
        //     //
        // }
    }
    
    protected function sendFailedLoginResponse(Request $request)
    {
      throw ValidationException::withMessages([
          'errors' => [
            $request->get('email') => Lang::get('auth.failed'),
          ],
      ])->redirectTo('/');
    }
}
