<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['company_name', 'job_title', 'start_date', 'current', 'end_date', 'description']; 
}
