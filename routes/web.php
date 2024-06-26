<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    require __DIR__.'/auth.php';
require __DIR__.'/admin/admin.php';
require __DIR__.'/projects/project.php';
require __DIR__.'/projects/task.php';
require __DIR__.'/projects/customer.php';
require __DIR__.'/employees/employee.php';
require __DIR__.'/employees/role.php';
});


;
