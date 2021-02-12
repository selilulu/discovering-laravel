<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/hellopage', function () { //this hellopage is for the url
//     $name=request('name');
//     //this hello below refers to hello.blade.php in the views folder!!! it can get a second parameter as an array.
//     return view('hello',[
//         'name'=>$name
//     ]);
// });




Route::get('about', 'App\Http\Controllers\AboutController@index');
Route::get('layout', 'App\Http\Controllers\LayoutController@index');
Route::get('home', 'App\Http\Controllers\HomeController@index');
Route::get('contact', 'App\Http\Controllers\ContactController@index');
Route::get('/', 'App\Http\Controllers\WelcomeController@index');
Route::get('form', 'App\Http\Controllers\FormController@form');
Route::get('form/{name}', 'App\Http\Controllers\FormController@store');


Route::post('form', 'App\Http\Controllers\FormController@show');









