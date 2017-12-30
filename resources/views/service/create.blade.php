@extends('layouts.master')

@section('content')

{!! Form::open(['url' => '/service/add']) !!}


<div class ='full div1'>Name

<input type="text" name="service_name" value="{{ old('service_name') }}"
class='input'>


</div>


<div class ='full div1'>
	
	
	<button type="submit" >
Add Service
</button>
</div>

{!! Form::close() !!}


@endsection