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

Route::get('/test', function()
{
	return View::make('test');
});

// Route::resource('test', 'TestController');
// // Route::group(array('prefix' => 'admin','before' => 'auth'), function(){
//     Route::get('/admin', array('as'=>'dashboard.index', 'uses'=>'Admin\DashboardController@index'));

// // });