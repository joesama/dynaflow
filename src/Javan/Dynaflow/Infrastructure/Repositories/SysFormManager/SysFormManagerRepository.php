<?php namespace Javan\Dynaflow\Infrastructure\Repositories\SysFormManager;

use Javan\Dynaflow\Domain\Model\SysFormManager;

class SysFormManagerRepository implements SysFormManagerRepositoryInterface
{
   /**
     * Construct 
     *
     * @param  SysFormManager     $model 
     * @return null
     */
    public function __construct(SysFormManager $model)    
    {
        $this->model = $model;
    }

    /**
     * Insert 
     *
     * @param $formManager
     * @return boolean
     */
    public function add($formManager)
    {
        $data = new SysFormManager;
        $data->application_id = $formManager->application_id;
        $data->step_id = $formManager->step_id;
        $data->save();
    }

    /**
     * All Data 
     *
     * @param $formManager
     * @return boolean
     */
    public function update($formManager)
    {
        $data = SysFormManager::find($formManager->id);
        $data->application_id = $formManager->application_id;
        $data->step_id = $formManager->step_id;
        $data->save();
    }  

}
