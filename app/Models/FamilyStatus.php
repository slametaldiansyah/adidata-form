<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyStatus extends Model
{
    use HasFactory;
    protected $guarded=['id'];


    protected $table = "familystatus";
}
