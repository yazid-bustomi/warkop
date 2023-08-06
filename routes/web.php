<?php

use App\Http\Controllers\InventarisController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\MenuController;

use App\Http\Controllers\ProfileController;
use App\Models\Inventaris;
use Database\Factories\ProductFactory;
use Illuminate\Routing\Route as RoutingRoute;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    //product 
    Route::get('/admin/product', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('/admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('/admin/product/store', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('/admin/product/store/{id}', [ProductController::class, 'show'])->name('admin.product.show');

    // Inventaris
    Route::get('/admin/inv', [InventarisController::class, 'index'])->name('admin.inv.index');
    Route::get('/admin/inv/create', [InventarisController::class, 'create'])->name('admin.inv.create');
    Route::post('/admin/inv/store', [InventarisController::class, 'store'])->name('admin.inv.store');
});

Route::middleware('auth')->group(function (){
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
    Route::get('/order/storde', [OrderController::class, 'store'])->name('order.store');
});



Route::resource('menu',MenuController::class);

require __DIR__.'/auth.php';

