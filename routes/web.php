<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Models\Task;


// Route::get('/',function(){
//     return view('layouts.master');
// });

Route::get('/', [FrontendController::class, 'index'])->name('front.home');
Route::get('/contact', [FrontendController::class, 'contact'])->name('front.contact');
Route::get('/about-us', [FrontendController::class, 'about'])->name('front.about');


Route::get('task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('task', [TaskController::class, 'store'])->name('task.store');
Route::get('task', [TaskController::class, 'index'])->name('task.index');
Route::get('task/{id}', [TaskController::class, 'show'])->name('task.show');
Route::get('task/{id}/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::put('task/{id}', [TaskController::class, 'update'])->name('task.update');
Route::delete('task/{id}', [TaskController::class, 'destroy'])->name('task.destroy');

Route::get('/form', function(){
    return view('form');
});
