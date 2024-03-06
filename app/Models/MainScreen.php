<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainScreen extends Model
{
    use HasFactory;

    protected $fillable = [
       'mainscreen_id',
       'best_seller',
       'total_revenue'
    ];
}
