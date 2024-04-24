<?php




use App\Http\Controllers\Projects\CategoryController;
use App\Http\Controllers\Projects\ProjectController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
Route::resource('projects',ProjectController::class);
Route::resource('categories',CategoryController::class);


