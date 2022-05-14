<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assistancedetail extends Model
{
    use HasFactory;
    public function assitance(){
        return $this->belongsTo(assistance::class);
    }
    public function stand(){
        return $this->belongsTo(stand::class);
    }

}
