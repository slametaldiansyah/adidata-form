<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familymember extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function education()
    {
        return $this->belongsTo('App\Models\Education','educationlevelid','id');
    }
    public function sex()
    {
        return $this->belongsTo('App\Models\Sex','sexid','id');
    }
    public function family()
    {
        return $this->belongsTo('App\Models\Family','familyid','id');
    }
    public function familystatus()
    {
        return $this->belongsTo('App\Models\Familystatus','familystatusid','id');
    }

    protected $table = "familymember";

}
