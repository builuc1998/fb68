<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clone extends Model
{
    protected $table ='clone';
	
	protected $fillable = [
		'uid',
		'email',
		'password',
		'cookie',
		'token',
		'note',
		'first_name',
		'last_name',
		'user_uid',
		'checkpoint_type',
		'birthday',
		'phone_number',
        'sex',
        'photoid'
	];

}
