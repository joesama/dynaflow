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
        $sample = $this->model;
        $sample->sys_flow_id = $sysFlowStep->sys_flow_id;
        $sample->name = $sysFlowStep->name;
        $sample->action = $sysFlowStep->action;
        $sample->save();
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
     * All Data 
     *
     * @return object
     */
    public function update($sysFlowStep)
    {
        $sample = $this->model;
        $sample->sys_flow_id = $sysFlowStep->sys_flow_id;
        $sample->name = $sysFlowStep->name;
        $sample->action = $sysFlowStep->action;
        $sample->save();
    } 

    /**
     * All Data 
     *
     * @return object
     */
    public function delete($sysFlowStep)
    {
        $this->model->find(1);
        return $this->model->delete();
    }    

}
