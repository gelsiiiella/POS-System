<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainScreen extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'product_expense',
        'order_date'
    ];
}
