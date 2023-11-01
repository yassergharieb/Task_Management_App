<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

/* 
default Route for authenticate or register users;
*/
Route::get('/', function () {
    return view('auth.login');
})->middleware("guest");


/* 
auth routes which came with laravel breez;
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


/* 
task routes protected with  auth middleware to ensure that all crud oprations have been authoraized;
*/
Route::controller(TaskController::class)->prefix('task')->name("task.")
->middleware('auth')->group(function() {
    Route::get('/all' , 'index')->name('all');
    Route::get('/create','create')->name('create');
    Route::post('/store' , 'store')->name('store');
    Route::get('/edit/{id}' , 'edit')->name('edit');
    Route::post('/update/{id}' , 'update')->name('update');
    Route::post('/destroy/{id}' , 'destroy')->name('destroy');     
});