@extends('dynaflow::layout.head-form')
@section('judul', 'Flow Management')

@section('content')
    <h3>Create Sys Flow Step</h3>
    {{ Form::open(array('url' => 'sysflowstep/store', 'class' => 'form-horizontal')) }}

    <div class="form-group">
        <label class="col-sm-2 control-label">Sys Flow</label>
        <div class="col-sm-10">
            {{ Form::text('sys_flow_id', null, array('class'=>'form-control','placeholder'=>'Sys Flow'))}}
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Name Flow Step</label>
        <div class="col-sm-10">
            {{ Form::text('name', null, array('class'=>'form-control','placeholder'=>'Flow Step'))}}
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Action</label>
        <div class="col-sm-10">
            {{ Form::text('action', null, array('class'=>'form-control','placeholder'=>'Action'))}}
        </div>
    </div>

     <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="simpan" class="btn btn-primary" value="simpan">Create</button>
            <a href="{{ URL::to('sysflowstep')}}" class="btn btn-default">Cancel</a>
        </div>
    </div>
    {{ Form::close() }}
        
@stop