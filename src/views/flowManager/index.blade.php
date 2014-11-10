@extends('dynaflow::layout.head-manager')
@section('judul', 'Flow Management')

@section('content')
<a href="{{ URL::to('flowmanager/create?')}}flow_id={{$flow_id}}">create</a>
<ul id="sortable">
	@foreach($sysflowManager as $key => $value)        
    <li id="{{ $value->step_id }}">
        <span ></span>
        
        <div> &nbsp;<h2>&nbsp;&nbsp; {{ $value->flow->name }} &nbsp;&nbsp; - &nbsp;&nbsp; {{ $value->step->name }}  &nbsp;&nbsp; - &nbsp;&nbsp; {{ $value->trigger }}  </h2><a href="{{ URL::to('flowmanager/delete/')}}/{{ $value->id }}?flow_id={{ $value->flow_id }}">delete</a></div>
    </li>
    @endforeach
    
</ul>
@stop