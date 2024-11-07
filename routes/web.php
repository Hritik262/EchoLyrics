<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/', [ApiController::class, 'welcome']);
Route::post('/search', [ApiController::class, 'SearchSong'])->name('search');
