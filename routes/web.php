<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index']);

Route::get('/jobs/{id}/save', [JobController::class, 'save'])->name('jobs.save');

Route::resource('jobs', JobController::class);
