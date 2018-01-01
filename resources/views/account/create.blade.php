@extends('layouts.master')

@section('content')



{!! Form::open([  'route' => ['AddAccountImaged.route'],
  'method' => 'post' ,
'files' => true]) !!}


<div class ='full div1'>
@if(isset($serviceid) && $serviceid != "")
{!! Form::select('service_id', $services, $serviceid ) !!}
@else
{!! Form::select('service_id', $services, null ) !!}
@endif
</div>


<div class ='full div1'>Name

<input type="text" name="name" value="{{ old('name') }}"
class='input' required = 'required' >


</div>

<div class ='full div1'>
	

<input type = 'file' name = 'logo' required>
</div>



<div class ='full div1'>
Contact Name <input type="text" name="contact_name" value="{{ old('contact_name') }}"  required = 'required'
class='input'>

</div>



<div class ='full div1'>
<p> Details </p>
{{ Form::textarea('description' ,'',array('required' => 'required')) }}
</div>



<div class ='full div1'>
	
	
	<button type="submit" >
Add Account
</button>
</div>

{!! Form::close() !!}


@endsection
