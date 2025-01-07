<?php

use App\Http\Controllers\comingsoon;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [comingsoon::class, 'home'])->name('home');

Route::post('/waitingList',[comingsoon::class, 'sendEmail']);
