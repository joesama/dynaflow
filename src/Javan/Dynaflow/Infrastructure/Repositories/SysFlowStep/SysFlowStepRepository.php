<?php namespace Javan\Dynaflow\Infrastructure\Repositories\SysFlowStep;

use Javan\Dynaflow\Domain\Model\SysFlowStep;

class SysFlowStepRepository implements SysFlowStepRepositoryInterface
{
   /**
     * Construct 
     *
     * @param  SysFlowStep     $model 
     * @return null
     */
    public function __construct(SysFlowStep $model)    
    {
        $this->model = $model;
    }

    /**
     * Insert 
     *
     * @param $sysFlowStep
     * @return boolean
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
     * @param $limit
     * @return object
     */
    public function paginate($limit = 10)
    {
        $paginate = new SysFlowStep();
        $search = '';
        if(isset($_GET['search'])){ $search = $_GET['search']; }
        return $paginate->where('name', 'like', '%'.$search.'%')->orWhere('action', 'like', '%'.$search.'%')->paginate($limit);;
    }  

    /**
     * All Data 
     *
     * @param $sysFlowStep
     * @return boolean
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
     * @param $id
     * @return boolean
     */
    public function delete($id)
    {
        $sysflowstep = SysFlowStep::find($id);
        $sysflowstep->delete();
    }    

}
