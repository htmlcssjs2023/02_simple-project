<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

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
Route::group(['middleware'=>'auth'], function(){
    Route::get('/', [FrontendController::class,'index'])->name('front.home');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('front.contact');
    Route::get('/about-us', [FrontendController::class, 'about'])->name('front.about');

    Route::resource('task', TaskController::class)->middleware('admin');
    Route::resource('task', TaskController::class)->except('create');
    Route::resource('users', UserController::class)->only('index', 'show');
});

require __DIR__.'/auth.php';


