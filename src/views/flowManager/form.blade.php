@extends('dynaflow::layout.head-form')
@section('judul', 'Flow Management')

@section('content')
    <h3>Create Sys Flow Manager</h3>
    {{ Form::open(array('url' => 'flowmanager/store', 'class' => 'form-horizontal')) }}
    <input type="hidden" name='flow_id' value='{{$_GET['flow_id']}}'>
    <div class="form-group">
        <label class="col-sm-2 control-label">Step</label>
        <div class="col-sm-10">
            <!-- {{ Form::text('step_id', null, array('class'=>'form-control','placeholder'=>'Flow Step'))}} -->
            <select name='step_id' class="form-control">
                <option value""></option>
                @foreach($sysflowStep as $key => $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
            </select>   
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Next Step</label>
        <div class="col-sm-10">
            <select name='step_next_id' class="form-control">
                <option value""></option>
                @foreach($sysflowStep as $key => $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
            </select>   
            <!-- {{ Form::text('step_next_id', null, array('class'=>'form-control','placeholder'=>'Sys Flow'))}} -->
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
            <a href="{{ URL::to('flowmanager/index')}}/{{$_GET['flow_id']}}" class="btn btn-default">Cancel</a>
        </div>
    </div>
    {{ Form::close() }}
        
@stop