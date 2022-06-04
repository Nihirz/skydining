<?php

use App\Http\Controllers\AdminController as ControllersAdminController;
use App\Http\Controllers\AdminIndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});
Route::get('clear-cache',function(){
    Artisan::call('config:cache');
    return "Caches cleared";
});

Route::get('optimize',function(){
    Artisan::call('optimize');
    return "Optimized";

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->group(function() {
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    // Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');
    Route::get('/users-table',[AdminIndexController::class,'userTable'])->name('admin.users');
    Route::get('/users-view/{id}',[AdminIndexController::class,'userView'])->name('admin.users.view');
    Route::get('/additional-product',[AdminIndexController::class,'product'])->name('admin.product.view');
    Route::post('/additional-product',[AdminIndexController::class,'storeProduct'])->name('admin.product.store');
    Route::get('/delete-product/{id}',[AdminIndexController::class,'destroy'])->name('admin.product.delete');
    Route::get('/edit-product/{id}',[AdminIndexController::class,'editProduct'])->name('admin.product.edit');
    Route::post('/update-product',[AdminIndexController::class,'updateProduct'])->name('admin.product.update');
    Route::get('/promocodes',[AdminIndexController::class,'promocodeview'])->name('admin.promocode');
    Route::get('/edit-promocodes/{id}',[AdminIndexController::class,'promocodeedit'])->name('admin.promocodeedit');
    Route::post('/update-promocodes',[AdminIndexController::class,'updatePromocode'])->name('admin.promocodeupdate');
    Route::post('/promocodes',[AdminIndexController::class,'storepromocode'])->name('admin.store.promocode');
    Route::get('/promocodes-delete/{id}',[AdminIndexController::class,'destroyCode'])->name('admin.destroy.promocode');

}) ;

Route::get('/booking/step-1',[FrontController::class,'booking'])->name('booking');
Route::post('/booking/step-1',[FrontController::class,'Step1store'])->name('booking.store');
Route::get('/booking/step-2',[FrontController::class,'booking2'])->name('booking2');
Route::get('/about-us',[FrontController::class,'aboutUs'])->name('aboutUs');
Route::get('/safety',[FrontController::class,'safety'])->name('safety');
Route::get('/faq',[FrontController::class,'faq'])->name('faq');
Route::get('/contact-us',[FrontController::class,'contactUs'])->name('contactUs');
// Route::get('/faq',[FrontController::class,'faq'])->name('faq');
Route::get('/franchise',[FrontController::class,'franchise'])->name('franchise');
Route::get('/log-out',[AdminIndexController::class,'logout'])->name('admin.logout');