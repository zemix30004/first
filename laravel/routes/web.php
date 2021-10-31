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

/*Route::get('/', function () {
    return view('welcome');
});*/
use App\Http\Controllers\MainController;

Route::get('/users', 'App\Http\Controllers\MainController@index')->name('home');
Route::get('/search', 'App\Http\Controllers\MainController@search')->name('search');

Route::get('/about', function () {
	return 'About page';
	});
	

//Route::get('/user/{id}/{name}', function($id, $name) {
//	return 'ID: '. $id.'. Name: '.$name;
//});

