<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\CommerceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SheetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//portifolio/main
Route::get('home', [BoardController::class, 'index'])->name('board.index');
Route::get('portifolio', [BoardController::class, 'portifolio'])->name('board.portifolio');
Route::get('sobre', [BoardController::class, 'sobre'])->name('board.about');
Route::get('contato', [BoardController::class, 'contato'])->name('board.contact');
Route::get('meucaminho', [BoardController::class, 'meucaminho'])->name('board.myway');


//portifolio/projects

//system
//Home
Route::get('home/do/portifolio', [SheetController::class, 'start'])->name('start');
Route::view('busca', 'search')->name('search');

//Cliente
Route::get('home/do/portifolio/cliente', [SheetController::class, 'indexclient'])->name('index.client');
Route::get('busca/cliente', [SheetController::class, 'searchclient'])->name('search.client');


//Consulta
Route::get('consulta', [EventController::class, 'indexevent'])->name('index.event');
Route::get('busca/consulta', [EventController::class, 'searchevent'])->name('search.event');

//question
Route::get('questao', [QuestionController::class, 'indexquestion'])->name('index.question');
Route::get('questao/cliente', [QuestionController::class, 'storequestion'])->name('store.question');

//commerce
Route::get('comercio', [CommerceController::class, 'indexcommerce'])->name('index.commerce');
