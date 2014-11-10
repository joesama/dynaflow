@extends('dynaflow::layout.head-form')
@section('judul', 'Flow Management')

@section('content')
    <h3>Create Sys Flow Manager</h3>
    {{ Form::open(array('url' => 'flowmanager/store', 'class' => 'form-horizontal')) }}

    <div class="form-group">
        <label class="col-sm-2 control-label">Flow Id </label>
        <div class="col-sm-10">
            {{ Form::text('flow_id', null, array('class'=>'form-control','placeholder'=>'Flow Step'))}}
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Step Id</label>
        <div class="col-sm-10">
            {{ Form::text('step_id', null, array('class'=>'form-control','placeholder'=>'Flow Step'))}}
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Step Next Id</label>
        <div class="col-sm-10">
            {{ Form::text('step_next_id', null, array('class'=>'form-control','placeholder'=>'Sys Flow'))}}
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Trigger</label>
        <div class="col-sm-10">
            {{ Form::text('trigger', null, array('class'=>'form-control','placeholder'=>'Flow Step'))}}
        </div>
    </div>

     <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="simpan" class="btn btn-primary" value="simpan">Create</button>
            <a href="{{ URL::to('flowmanager')}}" class="btn btn-default">Cancel</a>
        </div>
    </div>
    {{ Form::close() }}
        
@stop