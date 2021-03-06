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
    const STATUS_STOP_SELL = 3;
   

    protected $statusArr = [
        self::STATUS_ACTIVE =>'Còn Hàng', 
        self::STATUS_HIDDEN =>'Hết hàng',
        self::STATUS_STOP_SELL=>'Ngừng bán'
    ];
   

    public function setNameAttribute($name){
        $this->attributes['name'] = $name;
        $this->attributes['slug']= Str::slug($name);

    }

    public function getStatusTextAttribute(){
        return $this->statusArr [$this->status];
    }

    public function getPriceSaleFormatAttribute(){
        return number_format($this->price_sale,0,'','.').'đ';
    }

    public function getPriceOriginFormatAttribute(){
        return number_format($this->price_origin,0,'','.').'đ';
    }

    public function getPriceInputFormatAttribute(){
        return number_format($this->price_input,0,'','.').'đ';
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function shop(){
        return $this->belongsTo(User::class);
    }

    public function images(){
        return $this->hasMany(Image::class,'product_id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function orders(){
        return $this->belongsToMany(Order::class)->withPivot('quantity', 'price')->withTimestamps();
    }
    public function image(){
        return $this->hasOne(Image::class,'product_id');
    }
    public static $statusArr2 = [
        self::STATUS_ACTIVE =>'Còn Hàng', 
        self::STATUS_HIDDEN =>'Hết hàng',
        self::STATUS_STOP_SELL=>'Ngừng bán'
    

    ];
}
