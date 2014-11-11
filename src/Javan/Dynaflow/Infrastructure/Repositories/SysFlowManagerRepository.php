<?php namespace Javan\Dynaflow\Infrastructure\Repositories;

use Javan\Dynaflow\Domain\Model\Identity\SysFlowManager;

class SysFlowManagerRepository implements SysFlowManagerRepositoryInterface
{
   /**
     * Construct 
     *
     * @param  Eloquent     $model 
     * @return null
     */
    public function __construct(SysFlowManager $model)    
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
     * All Data with paginate
     *
     * @return object
     */
    public function paginate($limit = 10)
    {
        $paginate = new SysFlowManager();
        return $paginate->paginate($limit);;
    } 

    /**
     * All Data 
     *
     * @return object
     */
    public function drag($list_order)
    {
         $list = explode(',' , $list_order);
         $flow_id = "";
         $no = 0;
        foreach($list as $id) {
            $dt_flow = $this->model->where('flow_id', $_GET['flow_id'])->skip($no)->take(1)->get();
            foreach ($dt_flow as $flow){ 
                $this->model->where('id', $flow->id)->update(array('step_id' => $id));
                
                $next = $this->model->where('id', '<', $flow->id)->where('flow_id', $_GET['flow_id'])->orderBy('id', 'desc')->limit(1)->get();
                foreach ($next as $sn) {
                    $dt_flow = $this->model->where('flow_id', $_GET['flow_id'])->skip($no)->take(1)->get();
                    foreach ($dt_flow as $flow){
                        $this->model->where('id', $sn->id)->update(array('step_next_id' => $flow->step_id));
                    }
                }
            }
            $no++;
        }
    } 

    /**
     * All Data 
     *
     * @return object
     */
    public function delete($id)
    {
        echo $id;
        $flow_manager = $this->model->where('id', $id)->get();
        foreach ($flow_manager as $key => $flow) {
            $step_id = $flow->step_id;
            $step_next_id = $flow->step_next_id;
            $delete = $this->model->where('id', '<', $id)->orderBy('id', 'desc')->limit(1)->get();
            foreach ($delete as $del) {
                echo $del->id;
                $this->model->where('id', $del->id)->update(array('step_next_id' => $step_next_id));
            }
            
        }
        $flow_manager = $this->model->find($id);
        $flow_manager->delete();
        
        
        


        //var_dump($delete);
        //return $this->model->delete();
    }    

}
