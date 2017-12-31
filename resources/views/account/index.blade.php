@extends('layouts.master')

@section('content')



<div class ='full div1'>
@if (isset($service_id))
Accounts <a href = '/account/create/{{$service_id}}'> Add Accounts </a>
@else
Accounts <a href = '/account/create'> Add Accounts </a>
@endif


	</div>

<div class = 'full div1'>
	
	@if (count($accounts) > 0)
	@foreach($accounts as $ac)
	
	<div class = 'full div1'>

		<div class ='display65'>
			Account : {{$ac->name}} - 
			{{$ac->contact_name}}
			

			Service : {{$ac->services->service_name}}
			<img src = 	"{{ URL::to('/') }}/imgs/thumb/{{$ac->logo}}" />
		</div>

		<div class ='display15' > 
			<a href = "account/edit/{{$ac->id}}"> &rsaquo; Edit </a> | 
			<a href = "account/show/{{$ac->id}}">  &rsaquo; Details </a>
		</div>

	
		<div class ='display15' >
			{{ Form::open(['route' => ['MyDelAccount.route', $ac->id], 'method' => 'delete']) }}




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
