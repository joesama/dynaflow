<?php namespace Javan\Dynaflow\Infrastructure\Repositories\SysFlowManager;

use Javan\Dynaflow\Domain\Model\SysFlowManager;

class SysFlowManagerRepository implements SysFlowManagerRepositoryInterface
{
   /**
     * Construct 
     *
     * @param  SysFlowManager     $model 
     * @return null
     */
    public function __construct(SysFlowManager $model)    
    {

        $this->model = $model;
    }

    /**
     * Insert 
     *
     * @param $sysFlowManager
     * @return boolean
     */
    public function add($sysFlowManager)
    {
        $sysFlow = new SysFlowManager;
        $sysFlow->flow_id = $sysFlowManager->flow_id;
        $sysFlow->step_id = $sysFlowManager->step_id;
        $sysFlow->step_next_id = $sysFlowManager->step_next_id;
        $sysFlow->trigger = $sysFlowManager->trigger;
        $sysFlow->save();
    }

    /**
     * All Data 
     *
     * @param @flow_id
     * @return object
     */
    public function all($flow_id)
    {
        return $this->model->where('flow_id', $flow_id)->get();
    }

    public function step()
    {
        if(isset($_GET['step'])){
            $step = $this->model->where('step_id', $_GET['step'])->get();
            foreach ( $step as $key => $value) {
                return $value;# code...
            }
        }elseif(isset($_POST['step'])){
             $step = $this->model->where('step_id', $_POST['step'])->get();
            foreach ( $step as $key => $value) {
                return $value;# code...
            }
        }
    } 

    /**
     * All Data with paginate
     *
     * @param $limit
     * @return object
     */
    public function paginate($limit = 10)
    {
        $paginate = new SysFlowManager();
        return $paginate->paginate($limit);;
    } 

    /**
     * Drag 
     *
     * @param $list_order
     * 
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
     * @param $id
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
