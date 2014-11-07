<?php namespace Javan\Dynaflow\Infrastructure\Repositories;

use Eloquent;

class SysFlowManagerRepository implements SysFlowManagerRepositoryInterface
{
   /**
     * Construct 
     *
     * @param  Eloquent     $model 
     * @return null
     */
    public function __construct(Eloquent $model)    
    {

        $this->model = $model;
    }

    /**
     * Insert 
     *
     * @return null
     */
    public function add($sysFlowManager)
    {
        $sample = $this->model;
        $sample->flow_id = $sysFlowManager->flow_id;
        $sample->step_id = $sysFlowManager->step_id;
        $sample->step_next_id = $sysFlowManager->step_next_id;
        $sample->trigger = $sysFlowManager->trigger;
        $sample->save();
    }

    /**
     * All Data 
     *
     * @return object
     */
    public function all($flow_id)
    {
        //$this->model->where('id', 1)->update(array('trigger' => 'ABD'));
        return $this->model->where('flow_id', $flow_id)->get();
    } 

    /**
     * All Data 
     *
     * @return object
     */
    public function update($list_order)
    {
         $list = explode(',' , $list_order);
         $flow_id = "";
        foreach($list as $id) {
            $dt_flow = $this->model->where('id', $id)->get();
            foreach ($dt_flow as $flow){ 
                $flow_id = $flow->flow_id;
                $step_id = $flow->step_id;
                $step_next_id = $flow->step_next_id;
                

            }
             //$this->model->where('id', $id)->update(array('trigger' => 'ABD'));
        }
        $flowManagement = $this->model->where('flow_id', $flow_id)->get(); 
        echo $flow_id;
        //foreach($list as $id,  $flowManagement as $fm) {}
         
        //$this->model->where('id', 1)->update(array('trigger' => 'ABD'));
         //return $this->model->all();
    } 

    /**
     * All Data 
     *
     * @return object
     */
    public function delete($sysFlowManager)
    {
        $this->model->find($sysFlowManager);
        return $this->model->delete();
    }    

}
