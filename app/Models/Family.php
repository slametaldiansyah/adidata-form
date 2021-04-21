<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function familymember()
    {
        return $this->hasMany('App\Models\Familymember','id','familyid');
    }
    public function maritalstatus()
    {
        return $this->hasMany('App\Models\Maritalstatus','id','maritalstatusid');
    }

    protected $table = "family";
}
