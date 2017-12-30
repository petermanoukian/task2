<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
	protected $fillable =['service_name'];
	

 	public function account()
    {
        return $this->hasOne('App\Account');
    }
	
}
