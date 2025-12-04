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
Route::get('service',[HomeController::class,'service'])->name('service');
Route::get('blog-detail',[HomeController::class,'blogDetail'])->name('blogDetail');
Route::get('service-detail',[HomeController::class,'serviceDetail'])->name('serviceDetail');


// login routes
Route::get('forgot', [HomeController::class, 'forgot'])->name('forgot');
Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('set-new-pass', [HomeController::class, 'setNewPass'])->name('setNewPass');

Route::get('signup', [HomeController::class, 'register'])->name('register');
Route::get('varification-code', [HomeController::class, 'varificationCode'])->name('varificationCode');

