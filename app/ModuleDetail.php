<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModuleDetail extends Model
{
    protected $fillable = [
    	'module_id','title','description','status'
    ];

    public function module()
    {
    	return $this->belongsTo('App\Module');
    }
}
