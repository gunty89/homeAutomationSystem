<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $primaryKey = 'deviceId';


    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function sensoryDatas(){
        return $this->hasMany(SensoryData:: class);
    }

}
 