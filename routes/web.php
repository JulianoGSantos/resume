<?php

use App\Http\Controllers\BoardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [BoardController::class, 'index'])->name('board.index');
Route::get('portifolio', [BoardController::class, 'portifolio'])->name('board.portifolio');
Route::get('sobre', [BoardController::class, 'sobre'])->name('board.about');
Route::get('contato', [BoardController::class, 'contato'])->name('board.contact');
Route::get('meucaminho', [BoardController::class, 'meucaminho'])->name('board.myway');