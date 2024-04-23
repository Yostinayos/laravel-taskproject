<?php

use App\Http\Controllers\Projects\CustomerController;
use Illuminate\Support\Facades\Route;
Route::resource('customers',CustomerController::class);
