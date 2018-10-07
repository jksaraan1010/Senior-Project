<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends \Spatie\Permission\Models\Role
{
    public static function defaultRole()
	{
	    return [
	    	'admin',
	        'patient',
	        'family_member',
	    ];
	}
}
