<?php
use Javan\Dynaflow\Application\CommandBus;
use Javan\Dynaflow\Infrastructure\Repositories\SysFlowManager\SysFlowManagerRepositoryInterface;


class TestController extends \BaseController {

	public function __construct(SysFlowManagerRepositoryInterface $sysFlowManagerRepo){
		$this->sysFlowManagerRepo = $sysFlowManagerRepo;
	}
	
	public function index()
	{
		$flowManager = $this->sysFlowManagerRepo->step();
		return View::make('dynaflow::test.index', compact('flowManager'));
	}
	public function piring()
	{
		$flowManager = $this->sysFlowManagerRepo->step();
		return View::make('dynaflow::test.form', compact('flowManager'));
	}

	public function nasi()
	{
		$flowManager = $this->sysFlowManagerRepo->step();
		//return View::make('dynaflow::test.index', compact('flowManager'));
		return Redirect::to($flowManager->nextStep->action.'?step='.$flowManager->step_next_id)->with(['message' => 'success!']);
	}
	public function lauk()
	{
		$flowManager = $this->sysFlowManagerRepo->step();
		return View::make('dynaflow::test.index', compact('flowManager'));
	}
	public function sayur()
	{
		$flowManager = $this->sysFlowManagerRepo->step();
		return View::make('dynaflow::test.index', compact('flowManager'));
	}
	public function makan()
	{
		$flowManager = $this->sysFlowManagerRepo->step();
		return View::make('dynaflow::test.index', compact('flowManager'));
	}
	public function simpan()
	{
		$flowManager = $this->sysFlowManagerRepo->step();
		return View::make('dynaflow::test.index', compact('flowManager'));
	}

}
