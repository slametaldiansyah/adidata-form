<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function sex()
    {
        return $this->belongsTo('App\Models\Sex','sexid','id');
    }
    public function bloodtype()
    {
        return $this->belongsTo('App\Models\Bloodtype','bloodid','id');
    }
    public function citizenship()
    {
        return $this->belongsTo('App\Models\Citizenship','citizenshipid','id');
    }
    public function religion()
    {
        return $this->belongsTo('App\Models\Religion','religionid','id');
    }



    public function family()
    {
        return $this->hasMany('App\Models\Family','candidateid','id');
    }
    public function familymember()
    {
        return $this->hasManyThrough('App\Models\Familymember','App\Models\Family','candidateid','familyid','id','id');
    }
    public function additionalinformation()
    {
        return $this->hasMany('App\Models\Additionalinformation','candidateid','id');
    }

    protected $table = "candidate";
}
