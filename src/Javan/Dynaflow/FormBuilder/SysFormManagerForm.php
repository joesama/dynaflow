<?php namespace Javan\Dynaflow\FormBuilder;

use Kris\LaravelFormBuilder\Form;

class SysFormManagerForm extends Form
{
    public function buildForm()
    {
        $this
        	->add('Aplication', 'choice', [
                'choices' => [1 => 'application'],
                'empty_value' => '',
                'multiple' => false
            ])
            ->add('Flow Step', 'choice', [
                'choices' => [1 => 'Makan'],
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