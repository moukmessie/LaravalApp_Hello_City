<?php
use Illuminate\Support\Facades\Route;



Route::get('/',[\App\Http\Controllers\ApisController::class,'index'])->name('home');
Route::get('/about',[\App\Http\Controllers\ApisController::class,'about'])->name('about');



