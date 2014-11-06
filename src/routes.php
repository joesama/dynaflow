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
	return View::make('hello');
});

Route::group(array('prefix' => 'sysflow'), function () {
	Route::get('/', 'SysFlowController@index');
	Route::get('create', 'SysFlowController@create');
	Route::post('store', 'SysFlowController@store');

});

Route::group(array('prefix' => 'flowManager'), function () {
	Route::get('/', 'SysFlowManagerController@index');
});