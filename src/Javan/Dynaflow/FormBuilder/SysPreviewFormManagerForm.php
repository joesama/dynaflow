<?php namespace Javan\Dynaflow\FormBuilder;

use Javan\LaravelFormBuilder\Form;
use Javan\Dynaflow\Domain\Model\SysDetailFormManager;

class SysPreviewFormManagerForm extends Form
{
    public function buildForm()
    {
        $detailformmanager = SysDetailFormManager::where('form_manager_id', $this->getData('form_manager_id'))->get();

        foreach ($detailformmanager as $data) {
            
            if($data->value){
                $value = explode('|', $data->value);
            }

            switch ($data->type) {
                case 1:
                    //text box
                    $this->add($data->name, 'text', [
                        'label' => $data->title
                    ]);
                    break;
                case 2:
                    //dropdown
                    $this->add($data->name, 'select', [
                        'label' => $data->title,
                        'choices' => $value,
                        'empty_value' => [''=>''],
                        'multiple' => false
                    ]);
                    break;
                case 3:
                    //Radio button
                    $this->add($data->name, 'choice', [
                        'label'=> $data->title,
                        'choices' => $value,
                        'selected' => 'm',
                        'expanded' => true
                    ]);
                    break;
                case 4:
                    //text area
                    $this->add($data->name, 'textarea', [
                        'label' => $data->title
                    ]);
                    break;
                case 5:
                    //check box
                    $this->add($data->name, 'choice', [
                        'label' => $data->title,
                        'choices' => $value,
                        'selected' => ['en', 'de'],
                        'expanded' => true,
                        'multiple' => true
                    ]);
                    break;     
            }
        }
    }
}