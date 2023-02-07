<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CabinetController;
use App\Http\Controllers\CashController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

Route::middleware(['set_locale'])->group(function(){
    // Main Pages
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/marketing', [PageController::class, 'marketing'])->name('marketing');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');

    // Cabinet
    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin']], function(){
        Route::get('/', [AdminController::class, 'main'])->name('admin');
    });

    Route::group(['prefix' => 'cabinet', 'middleware' => ['auth']], function(){
        Route::get('/', [CabinetController::class, 'cabinet'])->name('cabinet');
        Route::get('/settings', [CabinetController::class, 'settings'])->name('settings');
        Route::get('/deposit', [CabinetController::class, 'deposit'])->name('deposit');
        Route::get('/withdraw', [CabinetController::class, 'withdraw'])->name('withdraw');
        Route::get('/story', [CabinetController::class, 'story'])->name('story');
        Route::get('/messages', [CabinetController::class, 'messages'])->name('messages');
        Route::get('/bonus', [CabinetController::class, 'bonus'])->name('bonus');
        Route::get('/marketing', [CabinetController::class, 'marketing'])->name('mark');
        Route::get('/econom', [CabinetController::class, 'econom'])->name('econom');
        Route::get('/standard', [CabinetController::class, 'standard'])->name('standard');
        Route::get('/premium', [CabinetController::class, 'premium'])->name('premium');
        Route::get('/vip', [CabinetController::class, 'vip'])->name('vip');
        Route::get('/partners', [CabinetController::class, 'partners'])->name('partners');
        Route::get('/promo', [CabinetController::class, 'promo'])->name('promo');
        Route::get('/pdf/preview', [PDFController::class, 'preview'])->name('pdf.preview');
        Route::post('/pdf/generate', [PDFController::class, 'generatePDF'])->name('pdf.generate');
    });
});

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Management Routes
Route::get('/locale/{locale}', [MainController::class, 'changeLocale'])->name('locale');
Route::get('/sponsor/{id}', [MainController::class, 'selectSponsor'])->name('sponsor');
Route::get('/cabinet/{pacage}/{user}', [CabinetController::class, 'showPartnerInfo'])->name('showPartnerInfo');

// Post Routes
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');
Route::post('/settings/update', [CabinetController::class, 'updateUserInfo'])->name('updateSettings');
Route::post('/settings/change-password', [CabinetController::class, 'passwordChanger'])->name('changePassword');
Route::post('/settings/avatar', [CabinetController::class, 'setAvatar'])->name('setAvatar');
Route::post('/extendAccount', [CabinetController::class, 'extendAccount'])->name('extendAccount');
Route::post('/deposit/pay', [CashController::class, 'pay'])->name('pay');
Route::post('/marketing/buy', [CabinetController::class, 'buy'])->name('buy');

// Email
Route::post('/confirmEmail', [EmailController::class, 'confirmEmail'])->name('confirmEmail');

// Dev Routes
Route::get('/emailexample', [CabinetController::class, 'previewEmail'])->name('previewEmail');
