<?php namespace Javan\Dynaflow\FormBuilder;

use Kris\LaravelFormBuilder\Form;
use Javan\Dynaflow\Domain\Model\SysFlow;
use Javan\Dynaflow\Domain\Model\SysApplication;

class SysApplicationForm extends Form
{
    public function buildForm()
    {

        //Application selected
        $sysflow = array('' => '');
        $sysflow = $sysflow + SysFlow::lists('name', 'id');
        
        $this
        	 ->add('flow_id', 'select', [
                'choices' => $sysflow,
                'selected' => $this->getData('flow_id'),
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