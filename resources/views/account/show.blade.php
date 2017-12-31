@extends('layouts.master')

@section('content')

<div class ='full div1'>
{{$acs->name}} is created with {{$acs->id}}
 | <a href = '/account'> &rsaquo;  View Account</a>
 
  | <a href = '/account/create'> &rsaquo; Add Account</a>
  
  
    | <a href = '/account/edit/{{$acs->id}}'> &raquo; Update {{$acs->name}} </a>
</div>
<div class ='full div1'>
{!! nl2br($acs->description) !!}
</div>

<div class ='full div1'>
Service {{$acs->services->service_name}}
</div>


<div class ='full div1'>
<img src = 	"{{ URL::to('/') }}/imgs/{{$acs->logo}}" />
</div>
@endsection
