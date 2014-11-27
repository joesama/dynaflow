<?php namespace Javan\Dynaflow\Infrastructure\Repositories\SysApplication;

use Javan\Dynaflow\Domain\Model\Identity\SysApplication;

class SysApplicationRepository implements SysApplicationRepositoryInterface
{
   /**
     * Construct 
     *
     * @param  SysApplication     $model 
     * @return null
     */
    public function __construct(SysApplication $model)    
    {
        $this->model = $model;
    }

    /**
     * Insert 
     *
     * @param $sysApplication
     * @return boolean
     */
    public function add($sysApplication)
    {
        $data = new SysApplication;
        $data->flow_id = $sysApplication->flow_id;
        $data->name = $sysApplication->name;
        $data->save();
    }

    /**
     * All Data 
     *
     * @return object
     */
    public function all()
    {
        return $this->model->where('flow_id', $_GET['flow_id'])->get();
    }

    /**
     * All Data with paginate
     *
     * @param $limit
     * @return object
     */
    public function paginate($limit = 10)
    {
        $paginate = new SysApplication();
        return $paginate->paginate($limit);;
    }  

    /**
     * All Data 
     *
     * @param $sysApplication
     * @return boolean
     */
    public function update($sysApplication)
    {
        $data = SysApplication::find($sysApplication->id);
        $data->flow_id = $sysApplication->flow_id;
        $data->name = $sysApplication->name;
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
        $sysApplication = SysApplication::find($id);
        $sysApplication->delete();
    }    

}
