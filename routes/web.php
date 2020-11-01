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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get("/","MasterController@welcome");
Route::get('/home', 'HomeController@index')->name('home');
Route::get("/about","MasterController@about")->name("about");
Route::get("/resume","MasterController@resume")->name("resume");
Route::get("/portfolio","MasterController@portfolio")->name("portfolio");
Route::get("/projects","MasterController@projects")->name("services");

//contat me page
Route::get("/contact", "ContactMeController@create")->name("contact");
Route::post("/contact","ContactMeController@store")->name("contactMe");