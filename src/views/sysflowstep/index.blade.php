@extends('dynaflow::layout.head')
@section('judul', 'Flow Management')

@section('content')
<table class="table table-bordered table-condensed">
    <thead>
        <tr>
            <td>Flow</td>
            <td>Flow Step</td>
            <td>Action</td>
            <td>Created</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($sysflowstep as $key => $value)
            <tr>
                <td>{{ $value->flow->name }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->action }}</td>
                <td>{{ $value->created_at }} </td>
                <td><a href="{{ URL::to('sysflowstep/edit/'.$value->id)}}">Update</a> | 
                    <a href="{{ URL::to('sysflowstep/delete/' . $value->id) }}" onclick="return confirm('Anda yakin ingin menghapus Flow Step ini?')">delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="pages">{{ $sysflowstep->links(); }}</div>

<a href="{{ URL::to('sysflowstep/create')}}">Add</a>

@stop