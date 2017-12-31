@extends('layouts.master')

@section('content')


{{ $acc->id }}


{!! Form::model($acc, ['route' => ['AccountUpdate.route', $acc->id],
'method' => 'PATCH',
'files' => true,
]) !!}


<div class ='full div1'>



{!! Form::select('service_id', $servicesdrop, $serviceid ) !!}

</div>


<div class ='full div1'>Name

<input type="text" name="name" value = "{{$acc->name}}"
class='input' required = 'required' >


</div>

<div class ='full div1'>
	{!! Form::file('logo', null,
['required']) !!}

<input type = 'hidden' name = 'logo1' value = "{{$acc->logo}}" />
</div>



<div class ='full div1'>
Contact Name <input type="text" name="contact_name" value = "{{$acc->contact_name}}"
class='input'>

</div>



<div class ='full div1'>
<p> Details </p>
{{ Form::textarea('description') }}
</div>



<div class ='full div1'>
	
	
	<button type="submit" >
Edit Account
</button>
</div>

{!! Form::close() !!}


@endsection
