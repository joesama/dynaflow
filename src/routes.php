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
	Route::get('delete/{id}', 'SysFlowController@destroy');
});

Route::group(array('prefix' => 'sysflowstep'), function () {
	Route::get('/', 'SysFlowStepController@index');
	Route::get('create', 'SysFlowStepController@create');
	Route::post('store', 'SysFlowStepController@store');
	Route::get('edit/{id}', 'SysFlowStepController@edit');
	Route::post('update/{id}', 'SysFlowStepController@update');
	Route::get('delete/{id}', 'SysFlowStepController@destroy');
});

Route::group(array('prefix' => 'flowmanager'), function () {
	Route::get('/index/{id}', 'SysFlowManagerController@index');
	Route::get('/content/{id}', 'SysFlowManagerController@content');
	Route::get('create', 'SysFlowManagerController@create');
	Route::post('store', 'SysFlowManagerController@store');
	Route::get('edit/{id}', 'SysFlowManagerController@edit');
	Route::get('update/{id}', 'SysFlowManagerController@update');
	Route::get('/index/drag/{id}', 'SysFlowManagerController@drag');
	Route::get('delete/{id}', 'SysFlowManagerController@delete');
});

Route::group(array('prefix' => 'test'), function () {
	Route::get('/index', 'TestController@index');
	Route::get('/piring', 'TestController@piring');
	Route::post('/nasi', 'TestController@nasi');
	Route::get('/lauk', 'TestController@lauk');
	Route::get('/sayur', 'TestController@sayur');
	Route::get('/makan', 'TestController@makan');
	Route::get('/simpan', 'TestController@simpan');
});