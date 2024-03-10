<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeManagementController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::get('products/create',[App\Http\Controllers\ProductController::class,'create']);
Route::post('products/create',[App\Http\Controllers\ProductController::class,'store']);
Route::get('products/{product_id}/edit',[App\Http\Controllers\ProductController::class,'edit']);
Route::put('products/{product_id}/edit',[App\Http\Controllers\ProductController::class,'update']);
Route::get('products/{product_id}/delete',[App\Http\Controllers\ProductController::class,'destroy']);

Route::resource('employee_management', EmployeeManagementController::class);
Route::get('employee_management/create',[App\Http\Controllers\EmployeeManagementController::class,'create']);
Route::post('employee_management/create',[App\Http\Controllers\EmployeeManagementController::class,'store']);
Route::get('employee_management/{employee_id}/edit',[App\Http\Controllers\EmployeeManagementController::class,'edit']);
Route::put('employee_management/{employee_id}/edit',[App\Http\Controllers\EmployeeManagementController::class,'update']);
Route::get('employee_management/{employee_id}/delete',[App\Http\Controllers\EmployeeManagementController::class,'destroy']);