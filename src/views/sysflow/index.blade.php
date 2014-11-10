@extends('dynaflow::layout.head')
@section('judul', 'Flow Management')

@section('content')
<table class="table table-bordered table-condensed">
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
                <td><a href="{{ URL::to('flowmanager')}}/index/{{ $value->id }}?modul=1">{{ $value->name }}</a></td>
                <td>{{ $value->created_at }} </td>
                <td><a href="{{ URL::to('sysflow/edit/'.$value->id)}}?modul=1">Update</a> | 
                    <a href="{{ URL::to('sysflow/delete/' . $value->id) }}" onclick="return confirm('Anda yakin ingin menghapus Flow Step ini?')">delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="pages">{{ $sysflow->links(); }}</div>

<a href="{{ URL::to('sysflow/create?modul=1')}}">Add</a>

@stop