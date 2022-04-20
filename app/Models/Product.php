<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function user(){
        return $this-> belongsTo(User::class);
    }

    public function shop(){
        return $this-> belongsTo(User::class);
    }

    public function images(){
        return $this-> HasMany(Product::class);
    }

    public function category(){
        return $this-> belongsTo(Category::class);
    }

    public function brand(){
        return $this-> belongsTo(Brand::class);
    }
    public function comments(){
        return $this-> HasMany(Comment::class);
    }

    public function reviews(){
        return $this-> HasMany(Review::class);
    }

    public function orders(){
        return $this-> belongsToMany(Order::class);
    }
}