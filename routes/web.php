<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    return view('home');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/products', function () {
    return view('products.index');
})->name('products');

Route::get('/products/category/{category}', function ($category) {
    return view('products.category', ['category' => $category]);
})->name('products.category');

Route::get('/products/{slug}', function ($slug) {
    $title = ucwords(str_replace('-', ' ', $slug));
    return view('products.show', compact('slug', 'title'));
})->name('products.show');

Route::get('/industries', function () {
    return view('industries');
})->name('industries');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// Quality content was merged into About Us

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blogs', function () {
    return view('blogs.index');
})->name('blogs');

Route::get('/blogs/{slug}', function ($slug) {
    $title = ucwords(str_replace('-', ' ', $slug));
    return view('blogs.show', compact('slug', 'title'));
})->name('blogs.show');

Route::get('/clear-cache', function() {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    return 'Cache cleared! Your new .env settings are now active. You can go back to the contact page.';
});


Route::post('/contact/send', [ContactController::class, 'sendInquiry'])->name('contact.send');
