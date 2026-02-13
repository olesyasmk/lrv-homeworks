<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect('/groups');
    }
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::resource('groups', App\Http\Controllers\GroupController::class);
    Route::resource('groups.students', App\Http\Controllers\StudentController::class);
});
