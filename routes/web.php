<?php

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

/*admin dashboard*/
//Route::get('dashboard', Dashboard::class)->name('dashboard');
Route::get('admin-login', AdminLogin::class)->name('admin.login');

 //Route::group(['middleware' => ['is_admin']],function(){

    Route::get('home', AdminDashboard::class)->name('dashboard');
    Route::get('product', Products::class)->name('all.products');
    Route::get('category', Categories::class)->name('categories');
//});
Auth::routes();

//Route::get('not-admin', function(){
    //return "not admin";
//})->name('not-admin')->middleware(['auth']);


Route::get('order', Order::class)->name('order');



/*product*/

Route::get('edit-product/{id}', EditProduct::class)->name('edit.product');

/*category*/
Route::get('edit-category/{id}', EditCategory::class)->name('edit.category');





