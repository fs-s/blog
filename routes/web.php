<?php
use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index']);

Route::get('/book/{book}',[BookController::class,'book']);
