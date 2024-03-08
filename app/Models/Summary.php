<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainScreen extends Model
{
    use HasFactory;

    protected $fillable = [
        'summary_id',
        'product_id',
        'product_expense',
        'product_sold'
    ];
}