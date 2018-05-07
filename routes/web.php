<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // echo '<pre>'; print_r(URL::getRequest()->cookie()); echo '</pre>';
    // echo '<pre>'; print_r(URL::getRequest()->query()); echo '</pre>';
    // echo '<pre>'; print_r(URL::getRequest()->getUriForPath('')); echo '</pre>';
    // echo '<pre>'; print_r(URL::getRequest()->getUri()); echo '</pre>';
    // echo '<pre>'; print_r(URL::getRequest()->getSchemeAndHttpHost()); echo '</pre>';
    // echo '<pre>'; print_r(URL::getRequest()->getRequestUri()); echo '</pre>';
    // echo '<pre>'; print_r(URL::getRequest()->getHttpHost()); echo '</pre>';
    // echo '<pre>'; print_r(URL::getRequest()->getSession()); echo '</pre>';
    // echo '<pre>'; print_r(URL::getRequest()->fingerprint()); echo '</pre>';
    // echo '<pre>'; print_r(get_class_vars(get_class(URL::getRequest()))); echo '</pre>';
    // echo '<pre>'; print_r(get_class_methods(URL::getRequest())); echo '</pre>';
    
    return view('welcome');
})->name('homepage');

Route::get('login', '\App\Models\User\LoginController@authenticate');
