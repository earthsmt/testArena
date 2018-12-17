<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attraction_users extends Model
{
	protected $table = 'attraction_users';
	public function signingIn()
	{
		$records = new attraction_users();
		$records->first_name='Ben';
		$records->save();
	}
    
}
