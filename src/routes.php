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

Route::get('/test', function()
{
	// foreach (Ims::sysFlowCreate() as $key => $value) {
	// 	echo $value->name;
	// }
	//Ims::sysFlowCreate();

	//echo Dynaflow::greeting();
});

Route::group(array('prefix' => 'sysflow'), function () {
	// Route::get('/create', function()
	// {
	// 	echo "string";
	// });
	Route::get('create', 'SysFlowController@create');
});