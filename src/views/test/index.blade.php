@extends('dynaflow::layout.head')
@section('judul', 'Flow Management')

@section('content')
<?php if(isset($flowManager)){ ?>
<h2>Step {{$flowManager->step->name}}
    <a href="{{ URL::to('')}}/{{$flowManager->nextStep->action}}?step={{$flowManager->step_next_id}}" class="btn btn-primary btn-lg btn-sm  pull-right" role="button">{{$flowManager->nextStep->name}}</a>
</h2>
<?php } ?>

@stop