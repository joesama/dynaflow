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
	Route::get('edit/{id}', 'SysFlowController@edit');
	Route::post('update/{id}', 'SysFlowController@update');

});

Route::group(array('prefix' => 'sysflowstep'), function () {
	Route::get('/', 'SysFlowStepController@index');
	Route::get('create', 'SysFlowStepController@create');
	Route::post('store', 'SysFlowStepController@store');
	Route::get('edit/{id}', 'SysFlowStepController@edit');
	Route::post('update/{id}', 'SysFlowStepController@update');
});

Route::group(array('prefix' => 'flowmanager'), function () {
	Route::get('index/{id}', 'SysFlowManagerController@index');
	Route::get('create', 'SysFlowManagerController@create');
	Route::post('store', 'SysFlowManagerController@store');
	Route::get('update/{id}', 'SysFlowManagerController@update');
	Route::get('delete/{id}', 'SysFlowManagerController@delete');
});