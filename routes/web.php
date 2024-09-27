<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;


Route::get('/', [DashboardController::class, 'index'])->name('dashboard'); //homepage

Route::post('/idea',[IdeaController::class, 'store'])->name('idea.create');//creating ideas

Route::get('/terms', function(){
    return view('terms');
});
Route::get('/profile',[ProfileController::class, 'index']);