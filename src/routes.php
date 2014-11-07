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

Route::group(array('prefix' => 'sysflowstep'), function () {
	Route::get('/', 'SysFlowStepController@index');
	Route::get('create', 'SysFlowStepController@create');
	Route::post('store', 'SysFlowStepController@store');

});

Route::group(array('prefix' => 'flowManager'), function () {
	Route::get('/{id}', 'SysFlowManagerController@index');
	Route::get('create', 'SysFlowManagerController@create');
	Route::get('update/{id}', 'SysFlowManagerController@update');
});