@extends('layouts.master')

@section('content')



<div class ='full div1'>
Services <a href = '/service/create'> Add Services </a>
	</div>

<div class = 'full div1'>
	
	@if (count($services) > 0)
	@foreach($services as $service)
	
	<div class = 'full div1'>

		<div class ='display55'>
		{{$service->service_name}}


			<a href = "account/create/{{$service->id}}"> Add Account</a>
		|  <a href = "account/byservice/{{$service->id}}"> View This accounts</a>

		</div>

	<div class ='display15'> 
		<a href = "service/edit/{{$service->id}}"> Edit </a>
	
		</div>

	
		<div class ='display15'>
			{{ Form::open(['route' => ['MyDelService.route', $service->id], 'method' => 'delete']) }}




			{!! Form::submit('Delete', array('class'=>'btn',
			'Onclick' => 'return ConfirmDelete();')) !!}


				{!! Form::close() !!}
		</div>
	</div>
	
	@endforeach
	@else
    No Services
    
    
    
	@endif
	
	
</div>

@endsection


<script>
function ConfirmDelete()
{
var x = confirm("Are you sure you want to delete?");
if (x)
return true;
else
return false;
}
</script>
