<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Olahragacontroller;

Route::get('olahraga/hitung', [Olahragacontroller::class, 'hitung']);
Route::resource('olahraga', Olahragacontroller::class);
