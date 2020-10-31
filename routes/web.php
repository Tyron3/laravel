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
    return view('welcome');
});


// add index (home page route)
// add route group for admin 
    // add route for reporting endpoints e.g. pipelineReport
    // add route for suppliers endpoints e.g. index, create , edit, update
    // add route for distributors endpoints e.g. index, create , edit, update
    // add route for products endpoints e.g. index, create, edit, update
    // add route for purchase order endpoints e.g. index, create, edit, update, report


// add route group for manager
    // add route for purchase order endpoints e.g. index, create, store, update

// add route group for sales 
    // add route for purchase order endpoints e.g. index, create, store, update