<?php

use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use \App\Http\Controllers\Feedback\FeedbackController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\News\NewsController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');



Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('news', AdminNewsController::class);
});


Route::name('news.')->prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('index');
    Route::get('show/{id}', [NewsController::class, 'show'])
        ->name('show')
        ->where('id', '/[\d+]/');
});


Route::name('feedback.')->prefix('feedback')->group(function () {
    Route::get('/', [FeedbackController::class, 'index'])->name('index');
    Route::post('/', [FeedbackController::class, 'store'])->name('store');
});

Route::name('order.')->prefix('order')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('index');
    Route::post('/', [OrderController::class,'store'])->name('store');
});
