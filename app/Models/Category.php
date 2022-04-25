<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    public function setNameAttribute($name){
        $this -> attributes['name'] = $name;
        $this -> attributes['slug']= Str::slug($name);

    }

    public function products(){
        return $this -> hasMany(Product::class);
    }
}
