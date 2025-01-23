<?php


use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;


Route::get('/', function () {
    return view('welcome');
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();


//Author
Route::get('/author', [AuthorController::class, 'index'])->name('author.index');
Route::get('/author/create', [AuthorController::class, 'create'])->name('author.create');
Route::post('/author', [AuthorController::class, 'store'])->name('author.store');
Route::delete('/author/{id}', [AuthorController::class, 'destroy'])->name('author.delete');
Route::get('/author/show/{id}', [AuthorController::class, 'show'])->name('author.show');
Route::put('/author/{id}', [AuthorController::class, 'update'])->name('author.update');
Route::get('/author/{id}/edit', [AuthorController::class, 'edit'])->name('author.edit');



//Category

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');


//Blog


// Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
// Route::get('/blog/create',[BlogController::class, 'create'])->name('blog.create');
// Route::post('/blog',[BlogController::class,'store'])->name('blog.store');
// Route::get('/blog/{id}/edit',[BlogController::class,'edit'])->name('blog.edit');
// Route::put('/blog/{id}',[BlogController::class,'update'])->name('blog.update');

// Route::prefix('blog')
//         ->middleware['user.auth']   // naming convention for middleware is small letters 
//         ->name('blog.')
//         ->group(function() {
//             Route::get('/',[BlogController::class,'index'])->name('index');
//             Route::get('/create',[BlogController::class, 'create'])->name('create');
//             Route::post('/',[BlogController::class,'store'])->name('store');
//             Route::get('/{id}/edit',[BlogController::class,'edit'])->name('edit');
//             Route::put('/{id}',[BlogController::class,'update'])->name('update');
//         });


Route::prefix('blogs')
    ->middleware(['auth']) // This correctly applies the middleware
    ->name('blog.')
    ->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('/create', [BlogController::class, 'create'])->name('create');
        Route::post('/', [BlogController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [BlogController::class, 'edit'])->name('edit');
       ;
        Route::put('/{id}', [BlogController::class, 'update'])->name('update');
    });

    Route::get('/ecommerce',[EcommerceController::class,'index'])->name('ecommerce.index');
    Route::get('/ecommerce/{id}/show', [EcommerceController::class, 'show'])->name('ecommerce.show');



//Route::view('/admin', 'admin/dashboard')->name('dashboard');
Route::get('/logout', function () {
    // Add logout logic here
    return redirect('/login');
})->name('logout');



// Product

Route::get('/product/create',[ProductController::class, 'create'])->name('product.create');
Route::post('/product',[ProductController::class,'store'])->name('product.store');
Route::get('/product',[ProductController::class,'index'])->name('product.index');
Route::get('/product/{id}/edit',[ProductController::class, 'edit'])->name('product.edit');

Route::put('/product',[ProductController::class,'update'])->name('product.update');