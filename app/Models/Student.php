<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    
     //Relacion de 1 a 1 inveresa
     public function investigation(){
        return $this->hasOne(Investigation::class);
    }
}
