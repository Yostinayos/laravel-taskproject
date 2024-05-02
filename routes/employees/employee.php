<?php

use App\Http\Controllers\Employees\EmployeeController;
use App\Http\Controllers\Employees\MemberController;
use App\Http\Controllers\Employees\RoleController;
use App\Http\Controllers\Employees\TaskMemberController;
use Illuminate\Support\Facades\Route;

Route::resource('employees', EmployeeController::class);
Route::resource('roles',RoleController::class);
Route::resource('members',MemberController::class);
Route::resource('taskMembers',TaskMemberController::class);
