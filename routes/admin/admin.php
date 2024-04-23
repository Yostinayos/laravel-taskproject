<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Projects\CustomerController;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/',function(){
        return view('admin.admin');
    })->name('admin');
});
