@extends('dynaflow::layout.head')
@section('judul', 'Flow Management')

@section('content')

<h2>Detail Form Manager
    <a href="{{ URL::to('detailformmanager/preview/'.$form_manager_id.'?modul=2')}}" class="btn btn-primary btn-lg btn-sm  pull-right" style="margin-left:10px" role="button">Preview</a>
    <a href="{{ URL::to('detailformmanager/create/'.$form_manager_id.'?modul=2')}}" class="btn btn-primary btn-lg btn-sm  pull-right" role="button">Add</a>
</h2>

<table class="table table-bordered table-condensed">
    <thead>
        <tr>
            <td>Title</td>
            <td>Type</td>
            <td>Name</td>
            <td>Value</td>
            <td>Require</td>
            <td>Created</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($detailformmanager as $key => $value)
            <tr>
                <td>{{ $value->title }}</td>
                <td>{{ $value->getTypeLabel() }}</td>
                <td>{{ $value->name }} </td>
                <td>{{ $value->value }}</td>
                <td>{{ $value->require }}</td>
                <td>{{ $value->created_at }} </td>
                <td style="width:230"><a href="{{ URL::to('detailformmanager/edit/'.$value->id)}}?modul=2">Update</a> | 
                    <a href="{{ URL::to('detailformmanager/delete/' . $value->id) }}" onclick="return confirm('Anda yakin ingin menghapus Form Manager ini?')">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="pages">{{ $detailformmanager->links(); }}</div>

@stop