@extends('dynaflow::layout.head')
@section('judul', 'Flow Management')

@section('content')
<table border=1>
    <thead>
        <tr>
            <td>Name Flow</td>
            <td>Created</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
    @foreach($sysflowstep as $key => $value)
        <tr>
            <td>{{ $value->name }}</td>
            <td>{{ $value->created_at }} </td>
            <td><a href="{{ URL::to('sysflowstep/update')}}">Update</a> | <a href="{{ URL::to('sysflowstep/delete')}}">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="pages">{{ $sysflowstep->links(); }}</div>

<a href="{{ URL::to('sysflowstep/create')}}">create</a>

@stop