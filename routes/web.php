<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GetHaircutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/home', [HomeController::class, 'index'])->name('home.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/services', [ServicesController::class, 'index'])->name('services.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/get-haircut', [GetHaircutController::class, 'index'])->name('get-haircut.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/edit-profile', [ProfileController::class, 'index']);


