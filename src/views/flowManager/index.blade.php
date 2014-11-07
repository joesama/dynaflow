@extends('dynaflow::layout.head')
@section('judul', 'Flow Management')

@section('content')

<ul id="sortable">
	@foreach($sysflowManager as $key => $value)        
    <li id="1">
        <span></span>
        
        <div><h2>NO </h2>Lalalala</div>
    </li>
    @endforeach
    
</ul>
@stop