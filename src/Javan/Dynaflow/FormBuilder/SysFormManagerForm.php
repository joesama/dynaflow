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
        $sysapplication = array('' => '');
        $sysapplication = $sysapplication + SysApplication::lists('name', 'id');

        //Flow Step selected
        $sysflowstep = array('' => '');
        $sysflowstep = $sysflowstep + SysFlowStep::lists('name', 'id');

        $this
        	->add('application_id', 'choice', [
                'label' => 'Application',
                'choices' => $sysapplication,
                'empty_value' => '',
                'multiple' => false
            ])
            
            ->add('step_id', 'select', [
                'label' => 'Flow Step',
                'choices' => $sysflowstep,
                'empty_value' => '',
                'multiple' => false
            ])
        	
            ->add('title', 'text', [
                'label'=>'Title'
            ])
            
            ->add('type', 'choice', [
                'label' => 'Type',
                'choices' => SysFormManager::type(),
                'empty_value' => '',
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