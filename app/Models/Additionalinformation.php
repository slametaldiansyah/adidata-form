<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additionalinformation extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function position()
    {
        return $this->hasMany('App\Models\Position','id','positionid');
    }


    protected $table = "additionalinformation";
}
