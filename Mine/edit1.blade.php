@extends('layouts.master')

@section('content')


{{ $accounts->id }}

/*

{!! Form::model($account, ['route' => ['AccountUpdate.route', $account->id],
'method' => 'PATCH',
'class' => 'form',
]) !!}


<div class ='full div1'>



{!! Form::select('service_id', $servicesdrop, $serviceid ) !!}

</div>


<div class ='full div1'>Name

<input type="text" name="name" value = {{$account->name}}
class='input' required = 'required' >


</div>

<div class ='full div1'>
	{!! Form::file('logo', null,
['required']) !!}
</div>



<div class ='full div1'>
Contact Name <input type="text" name="contact_name" value = {{$account->contact_name}}
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

*/
@endsection