<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;


Route::get('/', [DashboardController::class, 'index']); //homepage

Route::get('/terms', function(){
    return view('terms');
});

Route::get('/profile',[ProfileController::class, 'index']);