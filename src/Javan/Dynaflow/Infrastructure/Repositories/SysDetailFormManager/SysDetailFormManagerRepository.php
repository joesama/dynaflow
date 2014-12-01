<?php namespace Javan\Dynaflow\Infrastructure\Repositories\SysDetailFormManager;

use Javan\Dynaflow\Domain\Model\SysDetailFormManager;

class SysDetailFormManagerRepository implements SysDetailFormManagerRepositoryInterface
{
   /**
     * Construct 
     *
     * @param  SysDetailFormManager     $model 
     * @return null
     */
    public function __construct(SysDetailFormManager $model)    
    {
        $this->model = $model;
    }

    /**
     * Insert 
     *
     * @param $detailFormManager
     * @return boolean
     */
    public function add($detailFormManager)
    {
        $data = new SysDetailFormManager;
        $data->application_id = $detailFormManager->application_id;
        $data->step_id = $detailFormManager->step_id;
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
        $data = SysFormManager::find($FormManager->id);
        $data->application_id = $formManager->application_id;
        $data->step_id = $formManager->step_id;
        $data->save();
    } 

    /**
     * All Data 
     *
     * @param $id
     * @return boolean
     */
    public function delete($id)
    {
        $FormManager = SysFormManager::find($id);
        $FormManager->delete();
    }    

}
