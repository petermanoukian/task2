<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable =['services_id',
	'name',
	'contact_name',
	'description',
	'logo'];
	
	
	public function services()
	{
		return $this->belongsTo('App\Services');
	}
}
