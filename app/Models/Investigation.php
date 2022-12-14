<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    use HasFactory;
    public function results (){
        return $this->hasMany(Result::class);
    }
    public function observations (){
        return $this->hasMany(Observation::class);
    }
    public function contestants (){
        return $this->hasMany(contestant::class);
    }
    public function category (){
        return $this->belongsTo(Category::class);
    }
    public function area (){
        return $this->belongsTo(Area::class);
    }
    protected $guarded =['id'];
}
