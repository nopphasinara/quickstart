<?php

use App\Http\Controllers\Admin\PageController;

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



Route::namespace('Admin')->group(function () {
  Route::get('/', 'PageController@index')->name('admin.dashboard');
  Route::get('/login', 'PageController@login')->name('admin.login');

  // Route::get('/{pagename}?', function (Request $request, $pagename) {
  //   return (auth()->check()) ? view('admin.dashboard') : redirect(route('admin.login'));
  // })->name('admin.dashboard');
  //
  // Route::get('/login', function (Request $request) {
  //   return (auth()->check()) ? view('admin.dashboard') : view('admin.login');
  // })->name('admin.login');
});
