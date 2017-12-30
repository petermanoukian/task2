@extends('layouts.master')

@section('content')




{!! Form::model($service, ['route' => ['ServiceUpdate.route', $service->id],
'method' => 'PATCH',
'class' => 'form',
]) !!}


<div class ='full div1'>Name

<input type="text" name="service_name" value = {{$service->service_name}}
class='input'>
{{$service->service_id}}
{{$service->service_name}}

</div>


<div class ='full div1'>
	
	
	<button type="submit" >
Update Service
</button>
</div>

{!! Form::close() !!}


@endsection