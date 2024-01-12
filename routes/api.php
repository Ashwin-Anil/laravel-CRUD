<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apicontroller;


Route::post('message', [Apicontroller::class, 'message'])->name('message');

Route::post('getprofile', [Apicontroller::class, 'getprofile'])->name('getprofile');

Route::post('login', [Apicontroller::class, 'login'])->name('login');

Route::post('apilogin', [Apicontroller::class, 'apilogin'])->name('apilogin');
