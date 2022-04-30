<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    const STATUS_HIDDEN = 2;
    const STOP_SELL = 3;
   

    protected $statusArr = [
        '1' => 'Còn Hàng', 
        '2'=>'Hết hàng',
        '3'=>'Ngừng bán'
    

    ];
    public static $statusArr2 = [
        '1' => 'Còn Hàng', 
        '2'=>'Hết hàng',
        '3'=>'Ngừng bán'
    

    ];

    public function setNameAttribute($name){
        $this -> attributes['name'] = $name;
        $this -> attributes['slug']= Str::slug($name);

    }

    public function getStatusTextAttribute(){
        return $this -> statusArr [$this -> status];
    }

    public function getPriceSaleFormatAttribute(){
        return number_format($this-> price_sale,0,'','.').'đ';
    }

    public function getPriceOriginFormatAttribute(){
        return number_format($this-> price_origin,0,'','.').'đ';
    }

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
