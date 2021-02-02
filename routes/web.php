<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contact', function (){
    return "<h1>Jesse Viau</h1>";
});

Route::get('/search', function (){
    return "<h1>Laravel makes it easy to develop websites</h1>";
});

Route::get('/uid/{id}', function ($id){
    return "ID: $id";
})->where('id', '[0-9]+');


Route::group(['as'=>'users.', 'prefix'=>'users'], function (){


    Route::get('/{user?}', function ($user = "Batman"){
        return $user;
    })->name('show');

    Route::get('/{user}/images/{id}', function ($user, $id){
        return "Name: $user \nImage: $id";
    })->where('images', '[0-9]+')->name('images.show');


});

//Week 2 Assignment PART 1
Route::get('/aboutme', function () {

    $name = array("fullName" => "Jesse Viau");
    return view('pages.about', $name);

})->name('aboutme.fullname');



Route::get('/thingsiknow', function (){
    $items = array("JavaScript", "Java", "PHP", "C#");
    return view('pages.langs')->with('items', $items);

})->name('thingsiknow.lang');


