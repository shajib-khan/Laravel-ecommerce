<?php
use App\Http\Controllers\Auth\LoginController;
use App\Livewire\Body;
use App\Livewire\Order;
use App\Models\Category;
use App\Livewire\Products;
use App\Livewire\Dashboard;
use App\Livewire\Categories;
use App\Livewire\EditProduct;
use App\Livewire\EditCategory;
use App\Livewire\SIngleProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Backend\Admin\AdminLogin;
use App\Livewire\Backend\Dashboard\AdminDashboard;
use App\Livewire\Cart;
use App\Livewire\Checkout;
use App\Livewire\UserDashboard;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('single-product/{id}', SingleProduct::class)->name('single.product');
    Route::get('/', Body::class)->name('home.body');
 //Route::group(['middleware' => ['is_admin']],function(){

    Route::get('admin-dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::get('edit-category/{id}', EditCategory::class)->name('edit.category');
    Route::get('user-dashboard', UserDashboard::class)->name('user.Dashboard');
    Route::get('edit-product/{id}', EditProduct::class)->name('edit.product');
    Route::get('category', Categories::class)->name('categories');
    Route::get('product', Products::class)->name('all.products');
    Route::get('order', Order::class)->name('order');

    /*user-dashboard*/

//});
    Auth::routes();
    Route::get('checkout', Checkout::class)->name('checkout');
    Route::get('cart', Cart::class)->name('cart');







