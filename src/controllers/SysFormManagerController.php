<?php
use Javan\Dynaflow\Application\CommandBus;
use Javan\Dynaflow\Domain\Model\SysFormManager;
use Javan\Dynaflow\Validation\ValidationException;

class SysFormManagerController extends \BaseController {

	public function __construct(CommandBus $commandBus){
		$this->commandBus = $commandBus;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$formmanager = SysFormManager::paginate(10);

		return View::make('dynaflow::formmanager.index', compact('formmanager'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$form = \FormBuilder::create('Javan\Dynaflow\FormBuilder\SysFormManagerForm', [
          	'method' => 'POST',
          	'url' => 'formmanager/store'
      	]);

		return View::make('dynaflow::formmanager.form', compact('form'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$command = new CreateSysFormManagerCommand(Input::all());

        try {
            $result = $this->commandBus->execute($command);	
        } catch(ValidationException $e)
        {
            return Redirect::to('/formmanager/create?modul=1')->withErrors( $e->getErrors() );
        } catch(\DomainException $e)
        {
            return Redirect::to('formmanager/create?modul=1')->withErrors( $e->getErrors() );
        }

        return Redirect::to('formmanager?modul=1')->with(['message' => 'success!']);
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
		$model = SysFormManager::find($id);
		$form = \FormBuilder::create('Javan\Dynaflow\FormBuilder\SysFormManagerForm', [
          	'method' => 'POST',
          	'url' => 'formmanager/update/'.$id,
          	'model' => $model,
          	'data' => [ 'application_id' => $model->application_id, 'step_id' => $model->step_id]
      	]);

		return View::make('dynaflow::formmanager.form', compact('form'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$command = new UpdateSysFormManagerCommand(Input::all() + array('id' => $id));

        try {
            $result = $this->commandBus->execute($command);
        } catch(ValidationException $e)
        {
            return Redirect::to('/formmanager/edit/'.$id.'?modul=1')->withErrors( $e->getErrors() );
        } catch(\DomainException $e)
        {
            return Redirect::to('formmanager/edit/'.$id.'?modul=1')->withErrors( $e->getErrors() );
        }

        return Redirect::to('formmanager?modul=1')->with(['message' => 'success!']);
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
       	$sysformmanager = SysFormManager::find($id);
        $sysformmanager->delete();

        // redirect
        Session::flash('message', 'Berhasil menghapus Sys Flow!');

        return Redirect::to('formmanager?modul=1');
	}


}
