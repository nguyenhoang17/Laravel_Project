<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Brand extends Model
{
    use HasFactory;
    public function getImageUrlFullAttribute(){
        $url = Storage::disk($this -> disk)-> url($this-> path);
        return $url;
    }
    // public function setNameAttribute($name){
    //     $this -> attributes['name'] = $name;
    //     $this -> attributes['slug']= Str::slug($name);

    // }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
