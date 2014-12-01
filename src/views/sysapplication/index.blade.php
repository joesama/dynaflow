@extends('dynaflow::layout.head')
@section('judul', 'Flow Management')

@section('content')

<h2>Application
    <a href="{{ URL::to('sysapplication/create?modul=3')}}" class="btn btn-primary btn-lg btn-sm  pull-right" role="button">Add</a>
</h2>

<table class="table table-bordered table-condensed">
    <thead>
        <tr>
            <td>Flow</td>
            <td>Application</td>
            <td>Created</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($sysapplication as $key => $value)
            <tr>
                <td>{{ $value->flow->name }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->created_at }} </td>
                <td><a href="{{ URL::to('sysapplication/edit/'.$value->id)}}?modul=3">Update</a> | 
                    <a href="{{ URL::to('sysapplication/delete/' . $value->id) }}" onclick="return confirm('Anda yakin ingin menghapus Flow Step ini?')">delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="pages">{{ $sysapplication->links(); }}</div>

@stop