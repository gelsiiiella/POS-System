<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Management extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'employee_code',
        'username',
        'password'
    ];
}
