<?php namespace Javan\Dynaflow\Infrastructure\Repositories\SysFlow;

use Javan\Dynaflow\Domain\Model\Identity\SysFlow;


class SysFlowRepository implements SysFlowRepositoryInterface
{
   /**
     * Construct 
     *
     * @param  Eloquent     $model 
     * @return null
     */
    public function __construct(SysFlow $model)    
    {
        $this->model = $model;
    }

    /**
     * Insert 
     *
     * @return null
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
     * @return object
     */
    public function paginate($limit = 10)
    {
        $paginate = new SysFlow();
        return $paginate->paginate($limit);;
    } 

    /**
     * All Data 
     *
     * @return object
     */
    public function update($sysFlow)
    {
        $data = SysFlow::find($sysFlow->id);
        $data->name = $sysFlow->name;
        $data->save();
    } 

    /**
     * All Data 
     *
     * @return object
     */
    public function delete($id)
    {
        $sysflow = SysFlow::find($id);
        $sysflow->delete();
    }    

}
