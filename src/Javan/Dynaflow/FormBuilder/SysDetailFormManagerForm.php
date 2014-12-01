<?php namespace Javan\Dynaflow\FormBuilder;

use Kris\LaravelFormBuilder\Form;
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
                'multiple' => false
            ])
           
            ->add('name', 'text',[
                'label' => 'Name'
            ])

            ->add('value', 'text', [
                'label'=>'Value'
            ])

            // ->add('gender', 'choice', [
            //     'choices' => [1 => 'Yes', 2 => 'Female'],
            //     'selected' => 1,
            //     'restore_exception_handler(oid)d' => true
            // ])

        	->add('save', 'submit', [
                'attr' => ['class' => 'btn btn-primary']
            ])
            
            ->add('clear', 'reset', [
                'label' => 'Reset',
                'attr' => ['class' => 'btn btn-danger']
            ]);
    }
}