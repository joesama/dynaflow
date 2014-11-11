<?php
use Javan\Dynaflow\Application\CommandBus;
use Javan\Dynaflow\Infrastructure\Repositories\SysFlowStepRepositoryInterface;
use Javan\Dynaflow\Validation\ValidationException;

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
		$sysflowstep = $this->sysFlowStepRepo->paginate(10);

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
        } catch(ValidationException $e)
        {
            return Redirect::to('/sysflowstep/create?modul=1')->withErrors( $e->getErrors() );
        } catch(\DomainException $e)
        {
            return Redirect::to('sysflowstep/create?modul=1')->withErrors( $e->getErrors() );
        }

        return Redirect::to('sysflowstep?modul=1')->with(['message' => 'success!']);
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
		$sysflowstep = \Javan\Dynaflow\Domain\Model\Identity\SysFlowStep::find($id);

        return View::make('dynaflow::sysflowstep.form', compact('sysflowstep'));
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
		//delete
       	$sysflowstep = $this->sysFlowStepRepo->delete($id);

        // redirect
        Session::flash('message', 'Berhasil menghapus Flow Step!');

        return Redirect::to('sysflowstep?modul=2');
	}
}
