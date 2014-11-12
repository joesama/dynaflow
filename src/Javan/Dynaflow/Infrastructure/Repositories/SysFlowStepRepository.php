<?php namespace Javan\Dynaflow\Infrastructure\Repositories;

use Javan\Dynaflow\Domain\Model\Identity\SysFlowStep;

class SysFlowStepRepository implements SysFlowStepRepositoryInterface
{
   /**
     * Construct 
     *
     * @param  Eloquent     $model 
     * @return null
     */
    public function __construct(SysFlowStep $model)    
    {
        $this->model = $model;
    }

    /**
     * Insert 
     *
     * @return null
     */
    public function add($sysFlowStep)
    {
        $data = new SysFlowStep;
        $data->sys_flow_id = $sysFlowStep->sys_flow_id;
        $data->name = $sysFlowStep->name;
        $data->action = $sysFlowStep->action;
        $data->save();
    }

    /**
     * All Data 
     *
     * @return object
     */
    public function all()
    {
        return $this->model->where('sys_flow_id', $_GET['flow_id'])->get();
    }

    /**
     * All Data with paginate
     *
     * @return object
     */
    public function paginate($limit = 10)
    {
        $paginate = new SysFlowStep();
        return $paginate->paginate($limit);;
    }  

    /**
     * All Data 
     *
     * @return object
     */
    public function update($sysFlowStep)
    {
        $data = SysFlowStep::find($sysFlowStep->id);
        $data->sys_flow_id = $sysFlowStep->sys_flow_id;
        $data->name = $sysFlowStep->name;
        $data->action = $sysFlowStep->action;
        $data->save();
    } 

    /**
     * All Data 
     *
     * @return object
     */
    public function delete($id)
    {
        $sysflowstep = SysFlowStep::find($id);
        $sysflowstep->delete();
    }    

}
