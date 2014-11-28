<?php namespace Javan\Dynaflow\FormBuilder;

use Kris\LaravelFormBuilder\Form;

class SysApplicationForm extends Form
{
    public function buildForm()
    {
        $this
        	 ->add('flow_id', 'choice', [
                'choices' => [1 => 'Makan'],
                'empty_value' => '',
                'label' => 'Flow',
                'multiple' => false
            ])
        	
        	->add('name', 'text',[
                'label' => 'Name'
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