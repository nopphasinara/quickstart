<?php

namespace App\Models\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//
use App\Models\Post\Post;

class PageController extends Controller
{
  //
  
  public function index()
  {
    $input = [];
    
    $collection = collect([
      [
        'id' => '1',
        'title' => 'Helpers in Laravel',
        'content' => 'Create custom helpers in Laravel',
        'category' => 'php',
      ],
      [
        'id' => '2',
        'title' => 'Testing in Laravel',
        'content' => 'Testing File Uploads in Laravel',
        'category' => 'php',
      ],
      [
        'id' => '3',
        'title' => 'Telegram Bot',
        'content' => 'Crypto Telegram Bot in Laravel',
        'category' => 'php',
      ],
      [
        'id' => '11',
        'title' => 'Helpers in Laravel',
        'content' => 'Create custom helpers in Laravel',
        'category' => 'php',
      ],
      [
        'id' => '12',
        'title' => 'Testing in Laravel',
        'content' => 'Testing File Uploads in Laravel',
        'category' => 'php',
      ],
      [
        'id' => '13',
        'title' => 'Telegram Bot',
        'content' => 'Crypto Telegram Bot in Laravel',
        'category' => 'php',
      ],
    ]);
    
    $filter = $collection->filter(function ($value, $key) {
      if ($value['id'] == 2) return true;
      // if ($value['id'] == 2 || $value['id'] == 12) return true;
    });
    
    $collection->each(function ($item, $key) {
      // Tasks
      if ($key == 1) return false;
      // echo '<pre>'; print_r($item); echo '</pre>';
    });
    
    $tap = $collection->whereNotIn('id', 3)
    ->tap(function ($collection) {
      $collection = $collection->where('id', 1);
    })->all();
    
    $pipe = $collection->pipe(function($collection) {
      return $collection->count();
    });
    
    $contains = $collection->contains('id', '1');
    // true
    
    $contains = $collection->contains(function ($value, $key) {
      return strlen($value['title']) < 13;
    });
    // true
    
    $forget = collect(['country' => 'usa', 'state' => 'ny']);
    $forget->forget('country')->all();
    
    $avg = collect([
      ['shoes' => 10],
      ['shoes' => 35],
      ['shoes' => 7],
      ['shoes' => 68],
    ])->avg('shoes');
    
    $array = [
      'user' => ['username' => 'something'],
      'app' => ['creator' => ['name' => 'someone'], 'created' => 'today']
    ];
    $dot_array = array_dot($array);
    
    return view('pages.home')->with([
      'input' => $input,
    ]);
  }
}
