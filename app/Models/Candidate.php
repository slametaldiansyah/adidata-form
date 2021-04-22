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



    public function workexperience()
    {
        return $this->hasMany('App\Models\Workexperience','candidateid','id');
    }
    public function project()
    {
        return $this->hasManyThrough('App\Models\Project','App\Models\Workexperience','candidateid','workexperienceid','id','id');
    }

    public function organization()
    {
        return $this->hasMany('App\Models\Organization','candidateid','id');
    }
    public function reference()
    {
        return $this->hasMany('App\Models\Reference','candidateid','id');
    }

    public function certificate()
    {
        return $this->hasMany('App\Models\Certificate','candidateid','id');
    }
    public function spesialskillproficiency()
    {
        return $this->hasMany('App\Models\Spesialskillproficiency','candidateid','id');
    }
    public function computerproficiency()
    {
        return $this->hasMany('App\Models\Computerproficiency','candidateid','id');
    }
    public function languageproficiency()
    {
        return $this->hasMany('App\Models\Languageproficiency','candidateid','id');
    }
    public function informaleducation()
    {
        return $this->hasMany('App\Models\Informaleducation','candidateid','id');
    }
    public function formaleducation()
    {
        return $this->hasMany('App\Models\Formaleducation','candidateid','id');
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
