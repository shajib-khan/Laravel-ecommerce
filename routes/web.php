<?php

//use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Auth\LoginController;
use App\Livewire\Body;
use App\Livewire\Order;
use App\Models\Category;
use App\Livewire\Products;
use App\Livewire\Dashboard;
use App\Livewire\Categories;
use App\Livewire\EditProduct;
//use App\Livewire\Login;
use App\Livewire\EditCategory;
use App\Livewire\SIngleProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Backend\Admin\AdminLogin;
use App\Livewire\Backend\Dashboard\AdminDashboard;
use App\Livewire\CartPage;
use App\Livewire\UserDashboard;

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
Route::get('single-product/{id}', SingleProduct::class)->name('single.product');

/*admin dashboard*/
//Route::get('dashboard', Dashboard::class)->name('dashboard');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


 //Route::group(['middleware' => ['is_admin']],function(){

    Route::get('admin-dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::get('product', Products::class)->name('all.products');
    Route::get('category', Categories::class)->name('categories');
    Route::get('edit-category/{id}', EditCategory::class)->name('edit.category');
    Route::get('edit-product/{id}', EditProduct::class)->name('edit.product');
    Route::get('order', Order::class)->name('order');

    /*user-dashboard*/
    Route::get('user-dashboard', UserDashboard::class)->name('user.Dashboard');
//});
Auth::routes();

    Route::get('cart', CartPage::class)->name('cart');
//Route::get('not-admin', function(){
    //return "not admin";
//})->name('not-admin')->middleware(['auth']);






/*product*/



/*category*/






