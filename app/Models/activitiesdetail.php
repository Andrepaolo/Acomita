<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activitiesdetail extends Model
{
    use HasFactory;
    public function incharge(){
        return $this->belongsTo(incharge::class);
    }
    public function activitie(){
        return $this->belongsTo(activitie::class);
    }
}
