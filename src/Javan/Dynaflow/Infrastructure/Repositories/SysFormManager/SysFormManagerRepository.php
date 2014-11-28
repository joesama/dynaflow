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
        $data->title = $formManager->title;
        $data->type = $formManager->type;
        $data->name = $formManager->name;
        $data->value = $formManager->value;
        //$data->require = $formManager->require;
        $data->save();
    }

    /**
     * All Data 
     *
     * @return object
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * All Data with paginate
     *
     * @param $limit
     * @return object
     */
    public function paginate($limit = 10)
    {
        $paginate = new SysFormManager();
        return $paginate->paginate($limit);;
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
        $data->sys_flow_id = $FormManager->sys_flow_id;
        $data->name = $FormManager->name;
        $data->action = $FormManager->action;
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
