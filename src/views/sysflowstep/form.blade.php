@extends('dynaflow::layout.head')
@section('judul', 'Flow Management')

<?php
if (isset($sysflowstep)) {
    $edit_mode = true;
} else {
    $edit_mode = false;
}
?>

<?php
    $sysflow = array('' => '');
    $sysflow = $sysflow + \Javan\Dynaflow\Domain\Model\Identity\SysFlow::lists('name', 'id');
?>

@section('content')
    @if ($edit_mode)
        <h3>edit Sys Flow Step</h3>
        {{ Form::model($sysflowstep, array('url'=> URL::to('sysflowstep/update/'.$sysflowstep->id), 'class'=>'form-horizontal', 'role'=>'form')) }}
    @else
        <h3>Create Sys Flow Step</h3>
        {{ Form::open(array('url' => 'sysflowstep/store', 'class' => 'form-horizontal')) }}
    @endif

    <div class="form-group {{ $errors->first('sys_flow_id', 'has-error') }}">
        <label class="col-sm-2 control-label">Sys Flow</label>
        <div class="col-sm-10">
            {{ Form::select('sys_flow_id', $sysflow, '', array('class'=>'form-control','id'=>'user_id')) }}
            <span class="help-block"> {{ $errors->first('sys_flow_id') }} </span>
        </div>
    </div>

    <div class="form-group {{ $errors->first('name', 'has-error') }}">
        <label class="col-sm-2 control-label">Name Flow Step</label>
        <div class="col-sm-10">
            {{ Form::text('name', null, array('class'=>'form-control','placeholder'=>'Flow Step'))}}
            <span class="help-block"> {{ $errors->first('name') }} </span>
        </div>
    </div>

    <div class="form-group {{ $errors->first('action', 'has-error') }}">
        <label class="col-sm-2 control-label">Action</label>
        <div class="col-sm-10">
            {{ Form::text('action', null, array('class'=>'form-control','placeholder'=>'Action'))}}
            <span class="help-block"> {{ $errors->first('action') }} </span>
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