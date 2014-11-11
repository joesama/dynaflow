
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
    
