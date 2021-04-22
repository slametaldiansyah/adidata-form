<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Languageproficiency extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate','candidateid','id');
    }

    public function language()
    {
        return $this->belongsTo('App\Models\Language','languageid','id');
    }
    public function writtenF()
    {
        return $this->belongsTo('App\Models\Proficiencieslevel','written','id');
    }
    public function readF()
    {
        return $this->belongsTo('App\Models\Proficiencieslevel','read','id');
    }
    public function speakingF()
    {
        return $this->belongsTo('App\Models\Proficiencieslevel','speaking','id');
    }

    protected $table = "languageproficiency";
}
