<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function formaleducation()
    {
        return $this->hasMany('App\Models\Formaleducation','educationlevelid','id');
    }

    protected $table = "education";
}
