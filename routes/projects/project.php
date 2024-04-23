<?php

use App\Http\Controllers\Projects\ProjectController;
use Illuminate\Support\Facades\Route;
Route::resource('projects',ProjectController::class);


