<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/author',[AuthorController::class,'index'])->name('author.index');
Route::get('/author/create',[AuthorController::class,'create'])->name('author.create');
Route::post('/author',[AuthorController::class,'store'])->name('author.store');
Route::delete('/author/{id}',[AuthorController::class,'destroy'])->name('author.delete');
Route::get('/author/show/{id}',[AuthorController::class,'show'])->name('author.show');
Route::put('/author/{id}', [AuthorController::class, 'update'])->name('author.update');
Route::get('/author/{id}/edit', [AuthorCOntroller::class, 'edit'])->name('author.edit');




Route::get('/category',[CategoryController::class,'index'])->name('category.index');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/create',[CategoryController::class,'store'])->name('category.store');
