<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    use HasFactory;
    public function contestants (){
        return $this->belongsTo(contestant::class);
    }
    public function investigation (){
        return $this->belongsTo(Investigation::class);
    }
    protected $guarded =['id'];
}
