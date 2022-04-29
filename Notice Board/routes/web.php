<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\CommunityController as UserCommunityController;
use App\Http\Controllers\Admin\CommunityController as AdminCommunityController;


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

Auth::routes();
//Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Type of User Home
Route::get('/admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('/user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');

Route::get('user/communities/', [UserCommunityController::class, 'index'])->name('user.communities.index');
Route::get('user/communities/{id}', [UserCommunityController::class, 'show'])->name('user.communities.show');

Route::get('admin/communities/', [AdminCommunityController::class, 'index'])->name('admin.communities.index');
Route::get('/admin/communities/create', [AdminCommunityController::class, 'create'])->name('admin.communities.create');
Route::get('admin/communities/{id}', [AdminCommunityController::class, 'show'])->name('admin.communities.show');


Route::get('/admin/communities/', [AdminCommunityController::class, 'index'])->name('admin.communities.index');
Route::get('/admin/communities/{id}', [AdminCommunityController::class, 'show'])->name('admin.communities.show');
Route::get('/admin/communities/{id}/edit', [AdminCommunityController::class, 'edit'])->name('admin.communities.edit');
Route::post('/admin/communities/store', [AdminCommunityController::class, 'store'])->name('admin.communities.store');
Route::put('/admin/communities/{id}', [AdminCommunityController::class, 'update'])->name('admin.communities.update');
Route::delete('/admin/communities/{id}', [AdminCommunityController::class, 'destroy'])->name('admin.communities.destroy');
