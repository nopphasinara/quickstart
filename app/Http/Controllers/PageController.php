<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    /**
     * Show homepage view
     *
     * @return void
     */
    public function index()
    {
        $input = [];
        
        return view('frontend.homepage')->with([
          'input' => $input,
        ]);
    }
}
