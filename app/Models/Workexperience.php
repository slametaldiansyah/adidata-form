<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workexperience extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate','candidateid','id');
    }
    public function employeestatus()
    {
        return $this->belongsTo('App\Models\Employeestatus','employeestatusid','id');
    }

    protected $table = "workexperience";
}
