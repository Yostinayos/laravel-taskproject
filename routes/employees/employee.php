<?php

use App\Http\Controllers\Employees\EmployeeController;


use Illuminate\Support\Facades\Route;

Route::resource('employees', EmployeeController::class);
