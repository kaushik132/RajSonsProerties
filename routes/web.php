<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('contact-us', [HomeController::class, 'ContactUs'])->name('ContatctUs');

Route::get('blog',[HomeController::class,'blog'])->name('blog');
Route::get('blog-detail',[HomeController::class,'blogDetail'])->name('blogDetail');

