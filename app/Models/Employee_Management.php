<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Management extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'employee_name',
        'employee_username',
        'employee_password',
        'employee_image'
    ];
}
