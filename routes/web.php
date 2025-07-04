<?php

use App\Http\Controllers\TodoController;
use App\Livewire\Counter;
use App\Livewire\Test\Inline;
use Illuminate\Support\Facades\Route;

Route::get('/counter', Counter::class);

Route::get('/inline', Inline::class);

Route::get('/', [TodoController::class, 'index']);

