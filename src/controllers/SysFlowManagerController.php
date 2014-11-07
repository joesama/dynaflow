<?php
use Javan\Dynaflow\Application\CommandBus;

class SysFlowManagerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sysflowManager = DB::table('sys_flow_manager')->where('flow_id', '1');
		return View::make('dynaflow::flowManager.index', compact('sysflowManager'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
	public function update()
	{
		//
		$list_order = $_POST['list_order'];
// convert the string list to an array
$list = explode(',' , $list_order);
$i = 1 ;
foreach($list as $id) {
	try {
	    
	} catch (PDOException $e) {
		echo 'PDOException : '.  $e->getMessage();
	}
	$i++ ;
}
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
