<?php
use Javan\Dynaflow\Domain\Model\SysDetailFormManager;
class SysDetailFormManagerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($form_manager_id)
	{
		$query = SysDetailFormManager::where('form_manager_id',	$form_manager_id);
		$detailformmanager = $query->paginate(10);
		return View::make('dynaflow::detailformmanager.index', compact('form_manager_id', 'detailformmanager'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($form_manager_id)
	{
		$form = \FormBuilder::create('Javan\Dynaflow\FormBuilder\SysDetailFormManagerForm', [
          	'method' => 'POST',
          	'url' => 'detailformmanager/store'
      	]);

      	return View::make('dynaflow::detailformmanager.form', compact('form'));
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
		//
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
