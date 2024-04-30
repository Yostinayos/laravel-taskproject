<?php

use App\Http\Controllers\Employees\RoleController;
use Illuminate\Support\Facades\Route;

Route::resource('roles',RoleController::class);