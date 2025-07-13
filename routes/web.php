<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/resume', function () {
    return view('pages.resume');
})->name('resume');
Route::get('/projects', function () {
    return view('pages.projects');
})->name('projects');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/submit', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');
Route::get('/contact/success', [App\Http\Controllers\ContactController::class, 'success'])->name('contact.success');
