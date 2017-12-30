@extends('layouts.master')

@section('content')

<div class ='full div1'>
{{$service->service_name}} is created with {{$service->id}}
 | <a href = '/service'> View Services</a>
 
  | <a href = '/service/create'> Add Services</a>
</div>
@endsection