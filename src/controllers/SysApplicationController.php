<?php

use Illuminate\Routing\Controller;

class SysApplicationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$form = \FormBuilder::create('Javan\Dynaflow\FormBuilder\SysApplicationForm', [
          	'method' => 'POST',
          	'url' => 'sysaplication/store'
      	]);

		return View::make('dynaflow::sysapplication.form', compact('form'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$form = \FormBuilder::create('Javan\Dynaflow\FormBuilder\SysApplicationForm', [
          	'method' => 'POST',
          	'url' => 'sysaplication/store'
      	]);

		return View::make('dynaflow::sysapplication.form', compact('form'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
