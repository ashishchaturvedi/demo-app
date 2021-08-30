<?php

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
use App\Http\Controllers\AuthorizesRequests;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware'=>'auth'],function () {
    Route::get('/company', [CompanyController::class, 'index'])->name('list');
    Route::get('/company/{id}', [CompanyController::class, 'projectList'])->name('projectlist');
    Route::get('/project/{id}/', [CompanyController::class, 'commentList'])->name('commentlist');
    Route::any('/create', [CompanyController::class, 'create'])->name('create');
    Route::post('/store', [CompanyController::class, 'store'])->name('store');
    Route::get('/destroy/{id}', [CompanyController::class, 'destroy'])->name('destroy');
});

require __DIR__.'/auth.php';
