<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
    	'name','status'
    ];

    public function module_detail()
    {
    	return $this->hasMany('App\ModuleDetail');
    }
}
