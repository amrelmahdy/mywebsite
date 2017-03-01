<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $table = 'samples';

    public function category(){
    	return $this->belongsTo('App\Models\Category');
    }
}
