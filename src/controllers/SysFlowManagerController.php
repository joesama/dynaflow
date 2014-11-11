<?php
use Javan\Dynaflow\Application\CommandBus;
use Javan\Dynaflow\Infrastructure\Repositories\SysFlowManagerRepositoryInterface;
use Javan\Dynaflow\Infrastructure\Repositories\SysFlowRepositoryInterface;
use Javan\Dynaflow\Infrastructure\Repositories\SysFlowStepRepositoryInterface;

class SysFlowManagerController extends \BaseController {

	public function __construct(CommandBus $commandBus, SysFlowManagerRepositoryInterface $sysFlowManagerRepo, SysFlowStepRepositoryInterface $sysFlowStepRepo){
		$this->commandBus = $commandBus;	
		$this->sysFlowManagerRepo = $sysFlowManagerRepo;
		$this->sysFlowStepRepo = $sysFlowStepRepo;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($flow_id)
	{
		$sysflowManager = $this->sysFlowManagerRepo->all($flow_id);
		return View::make('dynaflow::flowManager.index', compact('sysflowManager', 'flow_id'));
	}

	public function content($flow_id)
	{
		$sysflowManager = $this->sysFlowManagerRepo->all($flow_id);
		return View::make('dynaflow::flowManager.content', compact('sysflowManager', 'flow_id'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$sysflowStep = $this->sysFlowStepRepo->all();
		return View::make('dynaflow::flowmanager.form', compact('sysflowStep'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$command = new CreateSysFlowManagerCommand(Input::all());
        $result = $this->commandBus->execute($command);
        $flow_id = $_POST['flow_id'];
        return Redirect::to('/flowmanager/index/'.$flow_id.'?modul=1')->with([ 'message' => 'success' ]);
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

	public function drag($list_order)
	{
		$sysflowManager = $this->sysFlowManagerRepo->drag($list_order);
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
		$flow_id = $_GET['flow_id'];
		$sysflowManager = $this->sysFlowManagerRepo->delete($id);
		 return Redirect::to('/flowmanager/index/'.$flow_id.'?modul=1')->with([ 'message' => 'success' ]);
	}


}
