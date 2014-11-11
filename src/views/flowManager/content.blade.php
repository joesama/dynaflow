
	@foreach($sysflowManager as $key => $value)        
    <li id="{{ $value->step_id }}">
        <span ></span>
        <div>
        	<b>&nbsp;&nbsp; {{ $value->flow->name }} &nbsp;&nbsp; - &nbsp;&nbsp; {{ $value->step->name }}  &nbsp;&nbsp; - &nbsp;&nbsp; {{ $value->nextStep->name }} - &nbsp;&nbsp; {{ $value->trigger }} </b> <br><br>
        	&nbsp;&nbsp;<a href="{{ URL::to('flowmanager/delete/')}}/{{ $value->id }}?flow_id={{ $value->flow_id }}" class="btn btn-danger btn-lg btn-sm pull-right" onclick="return confirm('Anda yakin ingin menghapus Flow Manager ini?')">Drop</a>
        </div>
    </li>
    @endforeach
    
