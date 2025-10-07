<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MediaSocialController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Web\DashboardController as WebDashboardController;
use App\Http\Controllers\Web\MessageController;
use App\Http\Controllers\Web\PostController as WebPostController;
use App\Http\Controllers\Web\ProjectController as WebProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebDashboardController::class, 'index'])->name('home');
Route::get('/projects', [WebProjectController::class, 'index'])->name('project');
Route::get('/projects/{slug}', [WebProjectController::class, 'show'])->name('project.show');
Route::post('/messages', [MessageController::class, 'store'])->name('message.store');
Route::get('/posts', [WebPostController::class, 'index'])->name('posts');
Route::get('/posts/{slug}', [WebPostController::class, 'show'])->name('web.posts.show');

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
    Route::resource('/testimonials', TestimonialController::class);
    Route::resource('/projects', ProjectController::class);
    Route::delete('/projects/images/{id}', [ProjectController::class, 'deleteImage'])->name('projects.images.delete');
    Route::prefix('posts')->name('posts.')->group(function () {
        Route::resource('categories', PostCategoryController::class);
    });
    Route::resource('/posts', PostController::class);
    Route::post('/posts/upload-image', [PostController::class, 'uploadImage'])->name('posts.uploadImage');
    Route::resource('/faqs', FaqController::class);

});
