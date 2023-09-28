<?php

use App\Http\Controllers\Api\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('home', [HomeController::class, 'index']);
Route::post('/contact-us', [HomeController::class, 'contactUs']);
