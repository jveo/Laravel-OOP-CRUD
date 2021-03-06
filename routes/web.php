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

//Week 2 Assignment

//PART 1

//compact method
Route::get('/aboutme', function () {
    $fName = "Jesse";
    $lName = "Viau";
    return view('pages.about', compact("fName", "lName"));

})->name('aboutme.fullname');


//Implicit Array method
Route::get('/thingsiknow', function (){
    $items = ["JavaScript", "Java", "PHP", "C#"];
    return view('pages.langs')->with('items', $items);

})->name('thingsiknow.lang');


//PART 2

Route::get('/contact', function (){
    $email = ["email" => "jesse.viau92@stclairconnect.ca"];
    return view('pages.contact', $email);
})->name('contact.email');



// Week 3

//Route::get("/articles", "ArticleController@index")->name("articles.index");
//
//Route::get('/articles/{article}', 'ArticleController@show')->name('articles.show');

// Week 4
//    Route::get('/categories', 'CategoryController@index')->name('categories.index');
//    Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');

// Week 5

Route::group(['prefix'=>'categories'], function(){
    Route::get('/', 'CategoryController@index')->name('categories.index');
    Route::get('/create', 'CategoryController@create')->name('categories.create');
    Route::post('categories', 'CategoryController@store')->name('categories.store');
    Route::get('/{category}', 'CategoryController@show')->name('categories.show');
});

Route::group(['prefix'=>'articles'], function(){
    Route::get("/", "ArticleController@index")->name("articles.index");
    Route::get('/create', 'ArticleController@create')->name('articles.create');
    Route::post('articles', 'ArticleController@store')->name('articles.store');
    Route::get('/{article}', 'ArticleController@show')->name('articles.show');
});


