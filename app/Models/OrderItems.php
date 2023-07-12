<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
use App\Models\Orders;

class OrderItems extends Model
{
    use HasFactory;
    protected $table = 'order_items';
    protected $fillable = ['order_id','product_id','quantity'];
    protected $primaryKey = 'id';

    public function products() { 
        return $this->HasMany(Products::class,'product_id'); 
    }
    public function orders() { 
        return $this->HasMany(Orders::class,'order_id'); 
    }
}
