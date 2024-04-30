<?php

use App\Http\Controllers\Projects\TaskController;

use Illuminate\Support\Facades\Route;

Route::resource('tasks', TaskController::class);