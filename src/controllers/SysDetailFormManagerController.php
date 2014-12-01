<?php
use Javan\Dynaflow\Application\CommandBus;
use Javan\Dynaflow\Domain\Model\SysDetailFormManager;
use Javan\Dynaflow\Validation\ValidationException;
class SysDetailFormManagerController extends \BaseController {
	public function __construct(CommandBus $commandBus){
		$this->commandBus = $commandBus;
	}

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
          	'url' => 'detailformmanager/store/'.$form_manager_id
      	]);

      	return View::make('dynaflow::detailformmanager.form', compact('form'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($form_manager_id)
	{
		$command = new CreateSysDetailFormManagerCommand(Input::all());

        try {
            $result = $this->commandBus->execute($command);	
        } catch(ValidationException $e)
        {
            return Redirect::to('/detailformmanager/create/'.$form_manager_id.'?modul=1')->withErrors( $e->getErrors() );
        } catch(\DomainException $e)
        {
            return Redirect::to('detailformmanager/create'.$form_manager_id.'?modul=1')->withErrors( $e->getErrors() );
        }

        return Redirect::to('detailformmanager/index/'.$form_manager_id.'?modul=1')->with(['message' => 'success!']);
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
