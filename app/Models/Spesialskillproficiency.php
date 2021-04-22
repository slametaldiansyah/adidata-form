<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesialskillproficiency extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate','candidateid','id');
    }

    public function level()
    {
        return $this->belongsTo('App\Models\Proficiencieslevel','proficiencylevelid','id');
    }

    protected $table = "spesialskillproficiency";
}
