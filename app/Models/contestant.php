<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contestant extends Model
{
    use HasFactory;
    public function observations (){
        return $this->hasMany(Observation::class);
    }
    public function investigation (){
        return $this->belongsTo(Investigation::class);
    }
    public function user (){
        return $this->belongsTo(User::class);
    }

}
