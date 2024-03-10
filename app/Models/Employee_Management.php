<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Management extends Model
{
    public $table = 'employee_management';
    protected $primaryKey = 'employee_id';
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'employee_id',
        'employee_name',
        'employee_username',
        'employee_password',
        'employee_image'
    ];
}
