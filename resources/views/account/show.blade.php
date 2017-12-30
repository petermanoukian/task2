@extends('layouts.master')

@section('content')

<div class ='full div1'>
{{$acs->name}} is created with {{$acs->id}}
 | <a href = '/account'> View Account</a>
 
  | <a href = '/account/create'> Add Account</a>
</div>
<div class ='full div1'>
{{$acs->description}}
</div>

<div class ='full div1'>
Service {{$acs->services->service_name}}
</div>


<div class ='full div1'>
<img src = 	"{{ URL::to('/') }}/imgs/{{$acs->logo}}" />
</div>
@endsection