@extends('dynaflow::layout.head')
@section('judul', 'Flow Management')

@section('content')

<h2>Form Manager
    <a href="{{ URL::to('formmanager/create?modul=2')}}" class="btn btn-primary btn-lg btn-sm  pull-right" role="button">Add</a>
</h2>

<table class="table table-bordered table-condensed">
    <thead>
        <tr>
            <td>Application</td>
            <td>Flow Step</td>
            <td>Created</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($formmanager as $key => $value)
            <tr>
                <td>{{ $value->application->name }}</td>
                <td>{{ $value->flowStep->name }}</td>
                <td>{{ $value->created_at }} </td>
                <td style="width:230"><a href="{{ URL::to('formmanager/edit/'.$value->id)}}?modul=4">Update</a> | 
                    <a href="{{ URL::to('detailformmanager/index/'.$value->id)}}?modul=4">Detail Form</a> |
                    <a href="{{ URL::to('formmanager/delete/' . $value->id) }}" onclick="return confirm('Anda yakin ingin menghapus Form Manager ini?')">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="pages">{{ $formmanager->links(); }}</div>

@stop