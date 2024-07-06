<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/product-list', [ProductController::class, 'index']);
Route::get('/category-list', [CategoriesController::class, 'index']);

Route::get('/form-add-product', [ProductController::class, 'create']);

Route::post('/add-category', [CategoriesController::class, 'store'])->name('add.category');
Route::delete('/delete-category/{id}', [CategoriesController::class, 'destroy'])->name('destroy.category');



