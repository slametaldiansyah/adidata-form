<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate','candidateid','id');
    }

    protected $table = "organization";
}
