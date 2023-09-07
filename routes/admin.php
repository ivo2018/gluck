<?php

use App\Http\Controllers\Admin\CodigosController;
use App\Http\Controllers\CodigoivaController;
use App\Http\Controllers\Admin\HomeController;

use Illuminate\Support\Facades\Route;
Route::get('admin',[HomeController::class,'index']);
Route::Resource('codigos',CodigosController::class)->names('admin.codigosiva');