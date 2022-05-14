<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activitie extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function activitiedetails(){
        return $this->hasMany(activitiesdetail::class);
    }
    public function assitances(){
        return $this->hasMany(assistance::class);
    }
}
