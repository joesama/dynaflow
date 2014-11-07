<?php
use Javan\Dynaflow\Application\CommandBus;
use Javan\Dynaflow\Infrastructure\Repositories\SysFlowRepositoryInterface;

class SysFlowController extends \BaseController {

	public function __construct(CommandBus $commandBus, SysFlowRepositoryInterface $sysFlowRepo){
		$this->commandBus = $commandBus;	
		$this->sysFlowRepo = $sysFlowRepo;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$sysflow = $this->sysFlowRepo->all();

		return View::make('dynaflow::sysflow.index', compact('sysflow'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('dynaflow::sysflow.form');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$command = new CreateSysFlowCommand(Input::all());
        $result = $this->commandBus->execute($command);	
		
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
