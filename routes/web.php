<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MediaSocialController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/manage', [AuthController::class, 'showLoginForm'])->name('manage');
Route::post('/manage', [AuthController::class, 'login'])->name('manage.attempt')->middleware('throttle:login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboards', [DashboardController::class, 'index'])->name('dashboards.index');
    Route::get('/settings/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::post('/settings/contacts', [ContactController::class, 'store'])->name('contacts.store');
    Route::resource('/users', UserController::class);
    Route::resource('/settings/mediasocial', MediaSocialController::class);
    Route::resource('/services', ServiceController::class);
    Route::resource('/projects', ProjectController::class);
    Route::delete('/projects/images/{id}', [ProjectController::class, 'deleteImage'])->name('projects.images.delete');
    Route::resource('/posts', PostController::class);
    Route::post('/posts/upload-image', [PostController::class, 'uploadImage'])->name('posts.uploadImage');
    Route::prefix('posts')->name('posts.')->group(function () {
        route::resource('categories', PostCategoryController::class);
    });
});
