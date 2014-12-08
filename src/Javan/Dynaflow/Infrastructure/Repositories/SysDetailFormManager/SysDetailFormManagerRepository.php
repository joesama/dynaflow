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
        $data->form_manager_id = $detailFormManager->form_manager_id;
        $data->title = $detailFormManager->title;
        $data->type = $detailFormManager->type;
        $data->name = $detailFormManager->name;
        $data->value = $detailFormManager->value;
       //$data->require = $detailFormManager->require;
        $data->save();
    }

    /**
     * All Data 
     *
     * @param $formManager
     * @return boolean
     */
    public function update($detailFormManager)
    {
        $data = SysDetailFormManager::find($detailFormManager->id);
        $data->title = $detailFormManager->title;
        $data->type = $detailFormManager->type;
        $data->name = $detailFormManager->name;
        $data->value = $detailFormManager->value;
        $data->save();
    } 
    
}
