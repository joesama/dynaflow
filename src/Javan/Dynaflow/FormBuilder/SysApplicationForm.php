<?php namespace Javan\Dynaflow\FormBuilder;

use Kris\LaravelFormBuilder\Form;

class SysApplicationForm extends Form
{
    public function buildForm()
    {
        $this
        	 ->add('Flow', 'choice', [
                'choices' => ['monthly' => 'Monthly', 'yearly' => 'Yearly'],
                'empty_value' => '',
                'multiple' => false
            ])
        	
        	->add('Name', 'text')

        	->add('save', 'submit', [
                'attr' => ['class' => 'btn btn-primary']
            ])
            ->add('clear', 'reset', [
                'label' => 'Reset',
                'attr' => ['class' => 'btn btn-danger']
            ]);
    }
}