<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $statusArr = [
        '0' => 'Hiện', 
        '1'=>'Ẩn',
    ];
    public function getStatusTextAttribute(){
        return $this->statusArr [$this -> status];
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
