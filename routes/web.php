<?php

use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Home\CategoryController as HomeCategoryController;
use App\Http\Controllers\Home\CommentController as HomeCommentController;
use App\Http\Controllers\Home\HomeControler;
use App\Http\Controllers\Home\ProductController as HomeProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin-panel/management')
    ->name('dashboard')
    ->get('dashboard', function () {
    return view('admin.dashboard');
});

Route::prefix('admin-panel/management')->name('admin.')->group(function()
{
    Route::resource('brands',BrandController::class);
    Route::resource('attributes',AttributeController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('tags',TagController::class);
    Route::resource('products',ProductController::class);
    Route::get('/category-attributes/{category}' ,[CategoryController::class , 'getCategoryAttributes']);
    Route::resource('banners',BannerController::class);

// Get Category Attributes
    Route::get('/category-attributes/{category}' ,[CategoryController::class , 'getCategoryAttributes']);

    // Edit Product Image
    Route::get('/products/{product}/images-edit' ,[ProductImageController::class , 'edit'])->name('products.images.edit');
    Route::delete('/products/{product}/images-destroy' ,[ProductImageController::class , 'destroy'])->name('products.images.destroy');
    Route::put('/products/{product}/images-set-primary' ,[ProductImageController::class , 'setPrimary'])->name('products.images.set_primary');
    Route::post('/products/{product}/images-add' ,[ProductImageController::class , 'add'])->name('products.images.add');

    // Edit Product Category
    Route::get('/products/{product}/category-edit' ,[ProductController::class , 'editCategory'])->name('products.category.edit');
    Route::put('/products/{product}/category-update' ,[ProductController::class , 'updateCategory'])->name('products.category.update');

});

//Route::get('good',function (){
//    return view('good');
//});

//Route::get('good',[HomeController::class,'home']);
Route::get('/',[HomeControler::class,'index'])->name('home.index');
Route::get('home/{product}',[HomeControler::class,'products'])->name('home.products');
Route::get('/categories/{category:slug}',[HomeCategoryController::class,'show'])->name('home.categories.show');
Route::get('/products/{product:slug}',[HomeProductController::class,'show'])->name('home.products.show');

Route::get('exist',function(){
   auth()->logout();
   return redirect('/');
})->name('exist');


Route::post('/comments/{product}',[HomeCommentController::class,'store'])->name('home.comments.store');


