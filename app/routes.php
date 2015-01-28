<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('test');
});
Route::get('/demo', function()
{
	// return link_to_asset('http://localhost/project_team/project_team/public/test.html') ;
});

// Route::resource('test', 'TestController');
// // Route::group(array('prefix' => 'admin','before' => 'auth'), function(){
//     Route::get('/admin', array('as'=>'dashboard.index', 'uses'=>'Admin\DashboardController@index'));

// // });
// Route::get('/', array('as'=>'index', 'uses'=>'TestController@index'));
Route::get('/post', array('as'=>'post', 'uses'=>'TestController@post'));
Route::get('/script', array('as'=>'script', 'uses'=>'TestController@script'));
Route::get('/test', array('as'=>'test', 'uses'=>'TestController@store'));
// Route::get('/')