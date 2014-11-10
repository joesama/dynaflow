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
    @foreach($sysflow as $key => $value)
        <tr>
            <td><a href="{{ URL::to('flowmanager')}}/index/{{ $value->id }}">{{ $value->name }}</a></td>
            <td>{{ $value->created_at }} </td>
            <td><a href="{{ URL::to('sysflow/update')}}">Update</a> | <a href="{{ URL::to('sysflow/delete')}}">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{ URL::to('sysflow/create')}}">create</a>

@stop