<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $people = ['Taylor', 'Matt', 'Jeffrey'];

//    return View::make(); // Façade - functionally equivalent

//    return view('welcome', ['people' => $people]); // array
    return view('welcome', compact('people')); // compact func will create an array with a key and the value will be equal
                                              // to whatever is associated with the variable
//    return view('welcome')->with('people', $people);
//    return view('welcome')->with(['people' => $people]);
//    return view('welcome')->withPeople($people); // Dynamic methods - Laravel will properly parse
});

Route::get('about', function () {
    return view('pages.about'); // resources/views/pages/about.blade.php
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
