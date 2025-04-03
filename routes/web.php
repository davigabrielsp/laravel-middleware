<?php

use App\Http\Controllers\HomeController;
use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])
->name('site.index')
->middleware(LogAcessoMiddleware::class);
