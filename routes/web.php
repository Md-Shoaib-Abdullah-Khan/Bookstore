<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BookController::class, 'welcome']);
Route::get('/books', [BookController::class, 'index'])->name("books.index");
Route::get('/books/{bookId}/show', [BookController::class, 'show'])->name("books.show");
Route::get('/books/create', [BookController::class, 'create'])->name("books.create");
Route::post('books/', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{bookId}/edit', [BookController::class, 'edit'])->name("books.edit");
Route::post('books/update', [BookController::class, 'update'])->name('books.update');
Route::post('books/delete', [BookController::class, 'destroy'])->name('books.destroy');