<?php
use Javan\Dynaflow\Application\CommandBus;
use Javan\Dynaflow\Infrastructure\Repositories\SysFlowManagerRepositoryInterface;

class SysFlowManagerController extends \BaseController {

	public function __construct(CommandBus $commandBus, SysFlowManagerRepositoryInterface $sysFlowManagerRepo){
		$this->commandBus = $commandBus;	
		$this->sysFlowManagerRepo = $sysFlowManagerRepo;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($flow_id)
	{
		$sysflowManager = $this->sysFlowManagerRepo->all($flow_id);
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
	public function update($list_order)
	{
		$sysflowManager = $this->sysFlowManagerRepo->update($list_order);
		
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
