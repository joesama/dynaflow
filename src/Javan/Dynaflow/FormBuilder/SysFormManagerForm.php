<?php namespace Javan\Dynaflow\FormBuilder;

use Kris\LaravelFormBuilder\Form;
use Javan\Dynaflow\Domain\Model\SysApplication;
use Javan\Dynaflow\Domain\Model\SysFlowStep;
use Javan\Dynaflow\Domain\Model\SysFormManager;

class SysFormManagerForm extends Form
{
    public function buildForm()
    {

        //Application selected
        $sysapplication = SysApplication::lists('name', 'id');

        //Flow Step selected
        $sysflowstep = SysFlowStep::lists('name', 'id');

        $this
        	->add('application_id', 'select', [
                'label' => 'Application',
                'choices' => $sysapplication,
                'empty_value' => ['' => ''],
                'multiple' => false
            ])
            
            ->add('step_id', 'select', [
                'label' => 'Flow Step',
                'choices' => $sysflowstep,
                'empty_value' => ['' => ''],
                'multiple' => false
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