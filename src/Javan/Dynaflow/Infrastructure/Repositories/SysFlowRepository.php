<?php namespace Javan\Dynaflow\Infrastructure\Repositories;

use Eloquent;

class SysFlowRepository implements SysFlowRepositoryInterface
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
    public function add($sysFlow)
    {
        $sample = $this->model;
        $sample->name = $sysFlow->name;
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
    public function update($sysFlow)
    {
        return $this->model->all();
    } 

    /**
     * All Data 
     *
     * @return object
     */
    public function delete($sysFlow)
    {
        return $this->model->all();
    }    

}
