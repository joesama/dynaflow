@extends('dynaflow::layout.head-form')
@section('judul', 'Flow Management')

<?php
if (isset($sysflow)) {
    $edit_mode = true;
} else {
    $edit_mode = false;
}
?>

@section('content')
    <h3>Create Sys Flow</h3>
    @if ($edit_mode)
        <h3>Edit Brand</h3>
        {{ Form::model($sysflow, array('url'=> URL::to('sysflow/update/'.$sysflow->id), 'class'=>'form-horizontal', 'role'=>'form')) }}
    @else
        <h3>Create Brand</h3>
        {{ Form::open(array('url' => 'sysflow/store', 'class' => 'form-horizontal')) }}
    @endif

    <div class="form-group {{ $errors->first('name_brand', 'has-error') }}">
        <label class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            {{ Form::text('name', null, array('class'=>'form-control','placeholder'=>'Name Flow'))}}
            <span class="help-block"> {{ $errors->first('name') }} </span>
        </div>
    </div>

     <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="simpan" class="btn btn-primary" value="simpan">Simpan</button>
            <a href="{{ URL::to('sysflow')}}" class="btn btn-default">Batal</a>
        </div>
    </div>
    {{ Form::close() }}
        
@stop