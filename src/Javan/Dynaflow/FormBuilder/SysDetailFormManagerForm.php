<?php namespace Javan\Dynaflow\FormBuilder;

use Javan\LaravelFormBuilder\Form;
use Javan\Dynaflow\Domain\Model\SysDetailFormManager;

class SysDetailFormManagerForm extends Form
{
    public function buildForm()
    {
        $this
        	->add('title', 'text', [
               'label'=>'Title'
            ])
            
            ->add('type', 'select', [
                'label' => 'Type',
                'choices' => SysDetailFormManager::getType(),
                'empty_value' => [''=>''],
                'selected' => (isset($this->model->type))?$this->model->type:'',
                'multiple' => false
            ])
           
            ->add('name', 'text',[
                'label' => 'Name'
            ])

            ->add('value', 'text', [
                'label'=>'Value'
            ])

        	->add('save', 'submit', [
                'attr' => ['class' => 'btn btn-primary']
            ])
            
            ->add('clear', 'reset', [
                'label' => 'Reset',
                'attr' => ['class' => 'btn btn-danger']
            ]);
    }
}