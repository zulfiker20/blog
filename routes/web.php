<?php
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\BlogController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\PrivacyController;
use App\Http\Controllers\front\TermController;
// use App\Http\Controllers\front\SitemapController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Front Pages Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
// Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show'); // ব্লগের ডিটেইলস পেজের জন্য
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
// Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit'); // কন্টাক্ট ফর্ম সাবমিট করার জন্য
Route::get('/privacy-policy', [PrivacyController::class, 'index'])->name('privacy');
Route::get('/terms-conditions', [TermController::class, 'index'])->name('terms');
// Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap')

// Admin Dashboard Route
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/admin/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
