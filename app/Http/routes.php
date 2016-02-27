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
    //Route::get('about', function () {
    //    return view('pages.about'); // resources/views/pages/about.blade.php
    //});

    //Route::get('/', function () {
    //    $people = ['Taylor', 'Matt', 'Jeffrey'];
    //
    ////    return View::make(); // Façade - functionally equivalent
    //
    ////    return view('welcome', ['people' => $people]); // array
    //    return view('welcome', compact('people')); // compact func will create an array with a key and the value will be equal
    //                                              // to whatever is associated with the variable
    ////    return view('welcome')->with('people', $people);
    ////    return view('welcome')->with(['people' => $people]);
    ////    return view('welcome')->withPeople($people); // Dynamic methods - Laravel will properly parse
    //});

    //Route::get('/', 'PagesController@home');
    //Route::get('about', 'PagesController@about');


    Route::get('cards', 'CardsController@index');
    Route::get('cards/{card}', 'CardsController@show');

    Route::post('cards/{card}/notes', 'NotesController@store');

    Route::get('notes/{note}/edit', 'NotesController@edit');
    Route::patch('notes/{note}', 'NotesController@update');

    //Route::get('cards/create', 'CardsController@create');
    //Route::post('cards/create', 'CardsController@store');
    //Route::post('cards/1', 'CardsController@show');
    //Route::post('cards/1/edit', 'CardsController@edit');
    //Route::put('cards/1', 'CardsController@update');
    //Route::patch('cards/1', 'CardsController@update');
    //Route::delete('cards/1', 'CardsController@destroy');
});
