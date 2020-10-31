<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    // initialise authentication middleware 

    public function index() {
        // Render Home page 
        return view('index');
    }
}
