<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informaleducation extends Model
{
    use HasFactory;
    protected $guarded=['id'];


    protected $table = "informaleducation";
}
