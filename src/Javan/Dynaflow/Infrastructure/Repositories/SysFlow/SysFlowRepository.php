<?php namespace Javan\Dynaflow\Infrastructure\Repositories\SysFlow;

use Javan\Dynaflow\Domain\Model\SysFlow;


class SysFlowRepository implements SysFlowRepositoryInterface
{
   /**
     * Construct 
     *
     * @param  SysFlow     $model 
     * @return null
     */
    public function __construct(SysFlow $model)    
    {
        $this->model = $model;
    }

    /**
     * Insert 
     *
     * @param  $sysFlow
     * @return boolean
     */
    public function add($sysFlow)
    {
        $data = new SysFlow;
        $data->name = $sysFlow->name;
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
        $paginate = new SysFlow();
        $search = '';
        if(isset($_GET['search'])){ $search = $_GET['search']; }
        return $paginate->where('name', 'like', '%'.$search.'%')->paginate($limit);
    } 

    /**
     * Update
     *
     * @param sysFlow
     * @return object
     */
    public function update($sysFlow)
    {
        $data = SysFlow::find($sysFlow->id);
        $data->name = $sysFlow->name;
        $data->save();
    } 

    /**
     * Delete 
     *
     * @param $id
     * @return boolean
     */
    public function delete($id)
    {
        $sysflow = SysFlow::find($id);
        $sysflow->delete();
    }    

}
