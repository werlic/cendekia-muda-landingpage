<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/facility', [HomeController::class, 'facility'])->name('facility');
Route::get('/visi-misi', [HomeController::class, 'visiMisi'])->name('visi-misi');
Route::get('/history', [HomeController::class, 'history'])->name('history');

// Unit/Department Routes
Route::get('/paud', [HomeController::class, 'paud'])->name('paud');
Route::get('/sd', [HomeController::class, 'sd'])->name('sd');
Route::get('/smp', [HomeController::class, 'smp'])->name('smp');
Route::get('/sma', [HomeController::class, 'sma'])->name('sma');

// Alumni & Prestasi Route
Route::get('/alumni-prestasi', [HomeController::class, 'alumniPrestasi'])->name('alumni-prestasi');

// Article Routes
Route::get('/articles', [HomeController::class, 'getArticles'])->name('articles');
Route::get('/article/{slug?}', [HomeController::class, 'showArticle'])->name('article');

// Publication Routes
Route::get('/publications', [HomeController::class, 'getPublications'])->name('publications');
Route::get('/publication/{slug?}', [HomeController::class, 'showPublication'])->name('publication');

// Contact Route
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
