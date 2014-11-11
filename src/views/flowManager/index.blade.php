@extends('dynaflow::layout.head')
@section('judul', 'Flow Management')

@section('content')
<h2>FLow Management {{$sysflow}}
    <a href="{{ URL::to('flowmanager/create?')}}flow_id={{$flow_id}}&modul=1" class="btn btn-primary  btn-lg btn-sm pull-right">Add</a>
</h2>

<ul id="sortable">
	@foreach($sysflowManager as $key => $value)        
    <li id="{{ $value->step_id }}">
        <span ></span>
        <div>
        	<b>
                &nbsp;&nbsp; Step &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $value->step->name }}  <br>
                &nbsp;&nbsp; Next &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $value->nextStep->name }} <br> 
                &nbsp;&nbsp; Trigger : {{ $value->trigger }} </b> 
        	   &nbsp;&nbsp;<a href="{{ URL::to('flowmanager/delete/')}}/{{ $value->id }}?flow_id={{ $value->flow_id }}" class="btn btn-danger btn-lg btn-sm pull-right" onclick="return confirm('Anda yakin ingin menghapus Flow Manager ini?')">Drop</a>
        </div>
    </li>
    @endforeach
    
</ul>
<script type="text/javascript">
$(function() {
    $('#sortable').sortable({
        axis: 'y',
        opacity: 0.7,
        handle: 'span',
        update: function(event, ui) {
            var list_sortable = $(this).sortable('toArray').toString();
    		// change order in the database using Ajax
            $.ajax({
                url: 'drag/'+list_sortable,
                type: 'GET',
                data: {flow_id:'{{$flow_id}}'},
                success: function(data) {
                     $('#sortable').show();
                     var $container = $("#sortable");
                    $container.load("../content/{{$flow_id}}");
                }
            });
        }
    });
     
        // var refreshId = setInterval(function()
        // {
        //     $container.load('content({{$flow_id}})');
        // }, 9000);
        

});
</script>
@stop