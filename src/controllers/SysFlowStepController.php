<?php
use Javan\Dynaflow\Application\CommandBus;
use Javan\Dynaflow\Infrastructure\Repositories\SysFlowStepRepositoryInterface;

class SysFlowStepController extends \BaseController {

	public function __construct(CommandBus $commandBus, SysFlowStepRepositoryInterface $sysFlowStepRepo){
		$this->commandBus = $commandBus;	
		$this->sysFlowStepRepo = $sysFlowStepRepo;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sysflowstep = $this->sysFlowStepRepo->all();

		return View::make('dynaflow::sysflowstep.index', compact('sysflowstep'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('dynaflow::sysflowstep.form');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$command = new CreateSysFlowStepCommand(Input::all());
		try {
			$result = $this->commandBus->execute($command);
			return Redirect::to('sysflowstep/index');
		} catch (Exception $e) {
			
		}
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
