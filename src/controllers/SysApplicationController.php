<?php
use Javan\Dynaflow\Application\CommandBus;
use Javan\Dynaflow\Infrastructure\Repositories\SysApplication\SysApplicationRepositoryInterface;
use Javan\Dynaflow\Validation\ValidationException;

class SysApplicationController extends \BaseController {

	public function __construct(CommandBus $commandBus, SysApplicationRepositoryInterface $sysApplicationRepo){
		$this->commandBus = $commandBus;	
		$this->sysApplicationRepo = $sysApplicationRepo;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sysapplication = $this->sysApplicationRepo->paginate(10);

		return View::make('dynaflow::sysapplication.index', compact('sysapplication'));
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
          	'url' => 'sysapplication/store'
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
		$command = new CreateSysApplicationCommand(Input::all());

        try {
            $result = $this->commandBus->execute($command);
        } catch(ValidationException $e)
        {
            return Redirect::to('/sysapplication/create?modul=3')->withErrors( $e->getErrors() );
        } catch(\DomainException $e)
        {
            return Redirect::to('sysapplication/create?modul=3')->withErrors( $e->getErrors() );
        }

        return Redirect::to('sysapplication?modul=3')->with(['message' => 'success!']);
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
		//delete
       	$this->sysApplicationRepo->delete($id);

        // redirect
        Session::flash('message', 'Berhasil menghapus Application!');

        return Redirect::to('sysapplication?modul=3');
	}


}
