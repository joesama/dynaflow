@extends('dynaflow::layout.head')
@section('judul', 'Flow Management')

@section('content')
<h2> Flow
    <a href="{{ URL::to('sysflow/create?modul=1')}}" class="btn btn-primary btn-lg btn-sm pull-right" role="button">Add</a>
</h2>
{{ Form::open(array('url' => 'sysflow', 'method' => 'get', 'class' => 'form-horizontal')) }}
<div class="form-group col-sm-3">
{{ Form::text('search', null, array('class'=>'form-control','placeholder'=>'Search'))}}
</div>
{{ Form::close() }}

<table class="table table-bordered table-condensed">
    <thead>
        <tr>
            <td>Name Flow</td>
            <td>Created</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($sysflow as $key => $value)
            <tr>
                <td><a href="{{ URL::to('flowmanager')}}/index/{{ $value->id }}?modul=1">{{ $value->name }}</a></td>
                <td>{{ $value->created_at }} </td>
                <td><a href="{{ URL::to('sysflow/edit/'.$value->id)}}?modul=1">Update</a> | 
                    <a href="{{ URL::to('sysflow/delete/' . $value->id) }}" onclick="return confirm('Anda yakin ingin menghapus Flow Step ini?')">delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
<?php $search = ''; if(isset($_GET['search'])){ $search = $_GET['search']; } ?>
<div class="pages">{{ $sysflow->appends(array('search' => $search, 'modul' => '1'))->links(); }}</div>

@stop