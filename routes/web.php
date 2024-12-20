<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusinessAdsController;
use App\Http\Controllers\ClubsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PaymentController;

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



Route::get('/',  [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);
Route::get('/courtside', [PagesController::class, 'courtside']);
Route::get('/beachside', [PagesController::class, 'beachside']);
Route::get('/riverside', [PagesController::class, 'riverside']);
Route::post('/courtside', [MessageController::class, 'store'])->name('courtside');
/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/profile', [PagesController::class, 'profile']);
Route::get('/profileadmin', [AdminController::class, 'profileadmin']);
Route::get('/productsadmin', [AdminController::class, 'productsadmin']);
Route::get('/messagesadmin', [AdminController::class, 'messagesadmin']);
Route::get('/feedbacksadmin', [AdminController::class, 'feedbacksadmin']);
Route::get('/usersadmin', [AdminController::class, 'usersadmin']);
Route::delete('/productsadmin/{id}', [AdminController::class, 'destroyproduct'])->name('productsadmin.destroy');
Route::delete('/messagesadmin/{id}', [AdminController::class, 'destroymessage'])->name('messagesadmin.destroy');
Route::delete('/feedbacksadmin/{id}', [AdminController::class, 'destroyfeedback'])->name('feedbacksadmin.destroy');
Route::delete('/usersadmin/{id}', [AdminController::class, 'destroyuser'])->name('usersadmin.destroy');

Route::post('/courtside', [MessageController::class, 'storecourtside'])->name('courtside');
Route::post('/beachside', [MessageController::class, 'storebeachside'])->name('beachside');
Route::post('/riverside', [MessageController::class, 'storeriverside'])->name('riverside');

Route::resource('/post', PostController::class);
Route::resource('/products', ProductController::class);
Route::resource('/messages', MessageController::class);
Route::resource('/users', UserController::class);
Route::resource('/clubs', ClubsController::class);
Route::resource('/businessads', BusinessAdsController::class);
Route::resource('/cart', CartController::class);
Auth::routes();

Route::controller(PaymentController::class)
->prefix('payments')
->as('payments')
->group(function(){
    Route::get('/token', 'token')->name('token');
    Route::get('/initiateStkPush', 'initiateStkPush')->name('initiateStkPush');
    Route::post('/stkCallback', 'stkCallback')->name('stkCallback');
    Route::get('/stkQuery', 'stkQuery')->name('stkQuery');
    Route::get('/registerUrl', 'registerUrl')->name('registerUrl');
    Route::post('/validation', 'Validation')->name('Validation');
    Route::post('/confirmation', 'Confirmation')->name('Confirmation');
    Route::get('/simulate', 'Simulate')->name('Simulate');
    Route::get('/qrcode', 'qrcode')->name('qrcode');
})
;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
