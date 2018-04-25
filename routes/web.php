<?php

use Illuminate\Http\Request;

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

Route::get('/', 'PageController@index')->name('homepage');

Route::get('/submit', function () {
    $user = Auth::check();
    if (!$user) {
      return redirect('login/');
    }
    return view('submit');
});

Route::post('/submit', function (Request $request) {
    $input = $request->all();
    if (!$input['slug']) $input['slug'] = str_slug($input['name']);

    $data = $request->replace($input)->validate([
        'name' => 'required',
        'slug' => 'required|unique:listing_types',
        'description' => '',
    ]);

    $listingType = tap(new \App\ListingType($data))->save();

    return redirect('/');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
