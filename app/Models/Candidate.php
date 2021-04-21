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
    public function additionalinformation()
    {
        return $this->hasMany('App\Models\Additionalinformation','candidateid','id');
    }

    protected $table = "candidate";
}
