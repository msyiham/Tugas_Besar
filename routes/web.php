<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HistoryOrderController;
use App\Http\Controllers\VerificationController;
use App\Models\User;
use Spatie\Permission\Contracts\Role;

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

//halaman customer
Route::get('/home', function () {
    return view('user.page.home');
});
Route::get('/', function () {
    return view('user.page.home');
});


Route::get('/shop', [App\Http\Controllers\ProductController::class,'shop'])
    ->name('shop');
Route::get('/shop/cari', [App\Http\Controllers\ProductController::class,'cari'])
    ->name('cari.product');
Route::get('/buy/{products}', [App\Http\Controllers\ProductController::class,'buy'])
    ->name('buy');
Route::get('/about', [App\Http\Controllers\AboutController::class,'about']);


//Login
Route::get('/login', [App\Http\Controllers\LoginController::class,'index'])
    ->name('login');
Route::get('/logout', [App\Http\Controllers\LoginController::class,'logout'])
    ->name('logout');
Route::post('/login', [App\Http\Controllers\LoginController::class,'authenticate'])
    ->name('proses.login');


Route::get('/customers/regis', [CustomerController::class,'create'])
    ->name('customers.create');
Route::post('/customers', [CustomerController::class,'store'])
    ->name('customers.store');

Route::group(["middleware" => ["auth","middleware" => "role:".User::ROLE_USER]],function(){
    Route::group(["prefix" => "cart" , "as" => "cart."],function(){
        Route::get('/', [CartController::class,'index'])
        ->name('index');
        Route::post('/addCart', [CartController::class,'addCart'])
        ->name('addCart');
        Route::post('/updateCart', [CartController::class,'updateCart'])
        ->name('updateCart');
        Route::post('/removeCart', [CartController::class,'removeCart'])
        ->name('removeCart');
        Route::get('/clearAllCart', [CartController::class,'clearAllCart'])
        ->name('clearAllCart');
        Route::get('/checkout', [CartController::class,'checkout'])
        ->name('checkout');

    });
    Route::get('/history', [HistoryOrderController::class,'index'])
    ->name('history');
    Route::get('/history-detail/{id}', [HistoryOrderController::class,'detail'])
    ->name('history.detail');
    Route::post('/history-detail/{id}', [HistoryOrderController::class,'detail_post'])
    ->name('history.detail');
    Route::get('/history-delete/{id}', [HistoryOrderController::class,'destroy'])
    ->name('history.delete');
 


    // Route::get('/back', [HistoryOrderController::class,'back'])
    // ->name('back');
    Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])
    ->name('profile.index');
    Route::get('/edit-profil/{user_id}', [App\Http\Controllers\ProfilController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/update-profil/{user_id}', [App\Http\Controllers\ProfilController::class, 'update'])
    ->name('profile.update');
    //verifikasi login
    Route::get('email/verify/need-verification',[VerificationController::class,'notice'])->middleware('auth')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}',[VerificationController::class,'verify'])->middleware(['auth','signed'])->name('verification.verify');

});
Route::group(["middleware" => ["auth","middleware" => "role:".User::ROLE_ADMIN]],function(){
    Route::get('/Customer', [CustomerController::class,'index'])
    ->name('customers.index');
    Route::get('/Produk', [ProductController::class,'index'])
    ->name('products.index');
    Route::get('/admin',[App\Http\Controllers\AdminController::class,function(){
        return redirect("Dashbord");
    }]); 
    Route::get('/Dashbord', [App\Http\Controllers\DashboardController::class,'index']);
    Route::get('/order-detail/{id}', [App\Http\Controllers\OrderController::class,'orderDetail']);
    Route::get('/edit', [App\Http\Controllers\AdminController::class,'editproduct']);
    Route::get('/product/create', [ProductController::class,'create'])
    ->name('products.create');
    Route::post('/product', [ProductController::class,'store'])
        ->name('products.store');
    Route::get('/edit/{id_product}', [ProductController::class,'edit'])
        ->name('products.edit');
    Route::get('/delete/{id_product}', [ProductController::class,'destroy'])
        ->name('products.delete');
    Route::patch('/update/{id_product}', [ProductController::class,'update'])
        ->name('products.update');
});