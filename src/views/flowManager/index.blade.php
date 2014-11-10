@extends('dynaflow::layout.head')
@section('judul', 'Flow Management')

@section('content')
<a href="{{ URL::to('flowmanager/create?')}}flow_id={{$flow_id}}&modul=1" class="btn btn-primary">Add</a>
<br>
<br>
<ul id="sortable">
	@foreach($sysflowManager as $key => $value)        
    <li id="{{ $value->step_id }}">
        <span ></span>
        <div>
        	<b>&nbsp;&nbsp; {{ $value->flow->name }} &nbsp;&nbsp; - &nbsp;&nbsp; {{ $value->step->name }}  &nbsp;&nbsp; - &nbsp;&nbsp; {{ $value->trigger }} </b> <br>
        	&nbsp;&nbsp;<a href="{{ URL::to('flowmanager/delete/')}}/{{ $value->id }}?flow_id={{ $value->flow_id }}" class="btn btn-danger right" onclick="return confirm('Anda yakin ingin menghapus Flow Manager ini?')">delete</a>
        </div>
    </li>
    @endforeach
    
</ul>
@stop