<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'product'; 
    use HasFactory;
    protected $fillable = [
        'product_id',
        'product_name',
        'product_price',
        'product_status',
        'product_image',
        'purchase_time'
    ];
}
