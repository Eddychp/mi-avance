<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    use HasFactory;


    public function observations (){
        return $this->hasMany(Observation::class);
    }
    public function investigation (){
        return $this->belongsTo(Investigation::class);
    }

    protected $guarded =['id'];

}
