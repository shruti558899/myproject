<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\indexcontroller;
use App\Http\Controllers\frontend\aboutcontroller;
use App\Http\Controllers\frontend\freelancercontroller;
use App\Http\Controllers\frontend\jobcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [indexcontroller::class,'index']);
Route::get('/about', [aboutcontroller::class,'about']);
Route::get('/job',[jobcontroller::class,'job']);
Route::get('/freelancer', [freelancercontroller::class,'freelancer']);