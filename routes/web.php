<?php

use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\BlogController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\PrivacyController;
use App\Http\Controllers\front\TermController;
// use App\Http\Controllers\front\SitemapController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminPrivacyController;
use App\Http\Controllers\Admin\AdminTermController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminPostController;
use Illuminate\Support\Facades\Route;

// Front Pages Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
// Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show'); 
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit'); 
Route::get('/privacy-policy', [PrivacyController::class, 'index'])->name('privacy');
Route::get('/terms-conditions', [TermController::class, 'index'])->name('terms');
// Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap')

// Admin Dashboard Route
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/admin/user', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.user');
Route::get('/admin/user/create', [UserController::class, 'create'])->name('admin.user.create');
Route::post('/admin/user/store', [UserController::class, 'store'])->name('admin.user.store');
Route::get('/admin/user/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
Route::put('/admin/user/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
Route::delete('/admin/user/delete/{id}', [UserController::class, 'destroy'])->name('admin.user.delete');


Route::get('admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('admin/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::post('admin/categories/update/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('admin/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.delete');

Route::get('/privacy', [AdminPrivacyController::class, 'index'])->name('admin.privacy.index');
Route::get('/privacy/create', [AdminPrivacyController::class, 'create'])->name('admin.privacy.create');
Route::post('/privacy/store', [AdminPrivacyController::class, 'store'])->name('admin.privacy.store');
Route::get('/privacy/edit/{id}', [AdminPrivacyController::class, 'edit'])->name('admin.privacy.edit');
Route::post('/privacy/update/{id}', [AdminPrivacyController::class, 'update'])->name('admin.privacy.update');
Route::delete('/privacy/delete/{id}', [AdminPrivacyController::class, 'destroy'])->name('admin.privacy.delete');

Route::get('/terms', [AdminTermController::class, 'index'])->name('admin.term.index');
Route::get('/terms/create', [AdminTermController::class, 'create'])->name('admin.term.create');
Route::post('/terms/store', [AdminTermController::class, 'store'])->name('admin.term.store');
Route::get('/terms/edit/{id}', [AdminTermController::class, 'edit'])->name('admin.term.edit');
Route::post('/terms/update/{id}', [AdminTermController::class, 'update'])->name('admin.term.update');
Route::delete('/terms/delete/{id}', [AdminTermController::class, 'destroy'])->name('admin.term.delete');

Route::get('admin/contacts', [AdminContactController::class, 'index'])->name('admin.contacts.index');
Route::delete('admin/contacts/delete/{id}', [AdminContactController::class, 'destroy'])->name('admin.contacts.delete');

Route::get('admin/posts', [AdminPostController::class, 'index'])->name('admin.post.index');
Route::get('admin/posts/create', [AdminPostController::class, 'create'])->name('admin.post.create');
Route::post('admin/posts/store', [AdminPostController::class, 'store'])->name('admin.post.store');
Route::get('admin/posts/edit/{id}', [AdminPostController::class, 'edit'])->name('admin.post.edit');
Route::post('admin/posts/update/{id}', [AdminPostController::class, 'update'])->name('admin.post.update');
Route::delete('admin/posts/delete/{id}', [AdminPostController::class, 'destroy'])->name('admin.post.delete');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
