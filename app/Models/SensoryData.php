<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensoryData extends Model
{
    use HasFactory;

    protected $primaryKey = 'sensoryDataId';

    public function device(){
        return $this->belongsTo(Device::class);
    }

}
