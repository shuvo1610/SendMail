<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MailController;



Route::get('/',[EmployeeController::class,'create'])->name('employee.create');
Route::post('employee-store',[EmployeeController::class,'store'])->name('employee.store');



