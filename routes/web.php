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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/home',[
       'uses'=>'AdminController@home',
        'as'=>'admin.home',
        'roles'=>['Admin']

        ]);

Route::get('/admin',[
       'uses'=>'HomeController@admin',
	'as'=>'admin',
        'middleware' => 'roles',
        'roles'=>['Admin']
	]);


Route::get('/moderate',[
	'uses'=>'HomeController@moderate',
	'as'=>'moderate',
        'middleware' => 'roles',
        'roles'=>['Admin','Moderator']
	]);
