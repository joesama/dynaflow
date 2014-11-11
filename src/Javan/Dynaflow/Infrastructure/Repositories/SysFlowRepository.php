<?php namespace Javan\Dynaflow\Infrastructure\Repositories;

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
    public function add(SysFlow $sysFlow)
    {
        $sysFlow->save();
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
    public function update($id)
    {
        $this->model->where('id', $id)->update(array(
            'name' => $_POST['name']
        ));
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
