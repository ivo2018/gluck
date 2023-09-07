<?php

use App\Http\Controllers\CodigoivaController;


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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('admin.codigos.index');
    });
});

Route::get('/home/create',[CodigoivaController::class,'create'])->name('home.create');
Route::post('/home/store',[CodigoivaController::class,'store'])->name('home.store');
Route::get('/home/{codigosiva}',[CodigoivaController::class,'show'])->name('home.show');
Route::get('/home/edit/{codigosiva}',[CodigoivaController::class,'edit'])->name('home.edit');
Route::put('/home/edit/{codigosiva}',[CodigoivaController::class,'update'])->name('home.update');
Route::delete('/home/edit/{codigosiva}',[CodigoivaController::class,'destroy'])->name('home.destroy');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
