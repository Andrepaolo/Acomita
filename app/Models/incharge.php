<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class incharge extends Model
{
    use HasFactory;
    public function activitiedetails(){
        return $this->hasMany(activitiesdetail::class);
    }public function assitances(){
        return $this->hasMany(assistance::class);
    }
}
