<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class associate extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function sons(){
        return $this->hasMany(son::class);
    }public function spouses(){
        return $this->hasMany(spouse::class);
    }public function stands(){
        return $this->hasMany(stand::class);
    }
}
