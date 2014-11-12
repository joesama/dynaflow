@extends('dynaflow::layout.head')
@section('judul', 'Flow Management')

@section('content')
<?php if(isset($flowManager)){ ?>
<h2>Step {{$flowManager->step->name}}
    <a href="{{ URL::to('')}}/{{$flowManager->nextStep->action}}?step={{$flowManager->step_next_id}}" class="btn btn-primary btn-lg btn-sm  pull-right" role="button">{{$flowManager->nextStep->name}}</a>
</h2>
 
        {{ Form::open(array('url' => $flowManager->nextStep->action.'?step='.$flowManager->step_next_id , 'class' => 'form-horizontal')) }}
 	<div class="form-group {{ $errors->first('name', 'has-error') }}">
        <label class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            {{ Form::text('name', null, array('class'=>'form-control','placeholder'=>'Name Flow'))}}
            <span class="help-block"> {{ $errors->first('name') }} </span>
        </div>
    </div>

     <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="simpan" class="btn btn-primary" value="simpan">Create</button>
            <a href="{{ URL::to('sysflow')}}" class="btn btn-default">Cancel</a>
        </div>
    </div>
    {{ Form::close() }}
<?php } ?>

@stop