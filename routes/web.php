<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or� controller method. Build something great!
|
*/
Route::get('/catalog','CatalogController@getAll');
Route::get('/', 'BaseController@getIndex');
//Route::get('/test/{name?}', function ($name = null) {
    //return 'Hello world ' . $name;
//});
//Route::get('/t/t/{id?}', function ($id=0) {
    //return 'User'. $id;
//});
//Route::get('user/{id}/', function ($id) {
//return 'User'. $id;
//)->where(['id'=>'[A-Za-z0-9]+']);
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/home', 'HomeController@postIndex');
//defoult route-всегда последний
Route::get('/{id}','StaticController@getIndex');

