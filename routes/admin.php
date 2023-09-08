<?php

use App\Http\Controllers\Admin\CodigosController;
use App\Http\Controllers\CodigoivaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsuariosController;



use Illuminate\Support\Facades\Route;
Route::get('admin',[HomeController::class,'index']);
Route::Resource('codigos',CodigosController::class)->names('admin.codigosiva');
Route::Resource('users',UsuariosController::class)->names('admin.users');