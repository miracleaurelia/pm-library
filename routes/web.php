<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get(
    '/',
    [BooksController::class, 'showBook']
);

Route::get(
    '/#display-book',
    [BooksController::class, 'showBook']
)->name('display');

Route::get(
    '/create/book',
    [BooksController::class, 'createBook']
)->name('createBook');

Route::post(
    '/store/book',
    [BooksController::class, 'storeBook']
)->name('storeBook');

Route::get(
    'show/book',
    [BooksController::class, 'showBook']
)->name('showBook');

Route::get(
    'updateView/book',
    [BooksController::class, 'updateBookView']
)->name('updateBookView');

Route::get(
    'post/edit/{id}',
    [BooksController::class, 'edit']
)->name('editBook');

Route::post(
    'post/update/{id}', 
    [BooksController::class, 'update']
)->name('updateBook');

Route::get(
    'deleteForm/book',
    [BooksController::class, 'deleteForm']
)->name('deleteForm');

Route::post(
    'delete/book',
    [BooksController::class, 'delete']
)->name('delete');
