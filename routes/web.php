<?php

use App\Livewire\Body;
use App\Livewire\Categories;
use App\Livewire\Dashboard;
use App\Livewire\EditCategory;
use App\Livewire\EditProduct;
use App\Livewire\Login;
use App\Livewire\Order;
use App\Livewire\SIngleProduct;
use App\Livewire\Products;
use App\Models\Category;
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

Route::get('/', Body::class)->name('home.body');
Route::get('single-product', SingleProduct::class)->name('single.product');

Auth::routes();

/*admin dashboard*/
Route::get('admin-dashboard', Dashboard::class)->name('dashboard');
Route::get('login', Login::class)->name('login');
Route::get('order', Order::class)->name('order');
Route::get('category', Categories::class)->name('categories');


/*product*/
Route::get('product', Products::class)->name('all.products');
Route::get('edit-product/{id}', EditProduct::class)->name('edit.product');

/*category*/
Route::get('edit-category/{id}', EditCategory::class)->name('edit.category');


