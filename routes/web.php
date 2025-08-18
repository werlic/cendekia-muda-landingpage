<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LearningAppController;
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

// Learning Application Routes
Route::prefix('app')->name('learning.')->group(function () {
    Route::get('/login', [LearningAppController::class, 'login'])->name('login');
    Route::get('/dashboard', [LearningAppController::class, 'dashboard'])->name('dashboard');
    
    // Learn Routes
    Route::get('/learn', [LearningAppController::class, 'learn'])->name('learn');
    Route::get('/learn/math', [LearningAppController::class, 'learnMath'])->name('learn.math');
    
    // Practice Routes
    Route::get('/practice', [LearningAppController::class, 'practice'])->name('practice');
    Route::get('/practice/english', [LearningAppController::class, 'practiceEnglish'])->name('practice.english');
    
    // Other Features
    Route::get('/leaderboard', [LearningAppController::class, 'leaderboard'])->name('leaderboard');
    Route::get('/quests', [LearningAppController::class, 'quests'])->name('quests');
    Route::get('/ahsanu-amala', [LearningAppController::class, 'ahsanuAmala'])->name('ahsanu-amala');
    Route::get('/ahsanu-amala/detail', [LearningAppController::class, 'ahsanuAmalaDetail'])->name('ahsanu-amala.detail');
    
    // Profile Routes
    Route::get('/profile', [LearningAppController::class, 'profile'])->name('profile');
    Route::get('/profile/mbti-test', [LearningAppController::class, 'mbtiTest'])->name('profile.mbti-test');
    Route::get('/profile/mbti-result', [LearningAppController::class, 'mbtiResult'])->name('profile.mbti-result');
});
