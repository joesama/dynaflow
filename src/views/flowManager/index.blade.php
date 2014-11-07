@extends('dynaflow::layout.head-form')
@section('judul', 'Flow Management')

@section('content')

<ul id="sortable">
	@foreach($sysflowManager as $key => $value)        
    <li id="{{ $value->step_id }}">
        <span ></span>
        
        <div> &nbsp;<h2>&nbsp;&nbsp; {{ $value->flow->name }} &nbsp;&nbsp; - &nbsp;&nbsp; {{ $value->step->name }}  &nbsp;&nbsp; - &nbsp;&nbsp; {{ $value->trigger }}  </h2></div>
    </li>
    @endforeach
    
</ul>
@stop