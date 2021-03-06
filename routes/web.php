<?php

use App\Http\Controllers\indexcontroller;
use Illuminate\Support\Facades\Route;

// home page route
Route::get('/', [indexcontroller::class,'showCategories'])->name('home');

// career page route 
Route::get('/career', function () {
    return view('career');
})->name('career');

// contact page route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// contact page route
Route::get('/about-company', function () {
    return view('about-company');
})->name('about-company');
// contact page route
Route::get('/about-director', function () {
    return view('about-director');
})->name('about-director');
// contact page route
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
// contact page route
Route::get('/mission-vission', function () {
    return view('mission-vission');
})->name('mission-vission');


// contact page route
Route::get('/our-clients', function () {
    return view('our-clients');
})->name('our-clients');
// contact page route
Route::get('/our-products', function () {
    return view('our-products');
})->name('our-products');
// contact page route
Route::get('/fully-automatic-triple-die-crank-paper-plate-making-machine', function () {
    return view('fully-automatic-triple-die-crank-paper-plate-making-machine');
})->name('fully-automatic-triple-die-crank-paper-plate-making-machine');
// contact page route
Route::get('/paper-plate-making-machine ', function () {
    return view('paper-plate-making-machine ');
})->name('paper-plate-making-machine ');
// somthig is added here