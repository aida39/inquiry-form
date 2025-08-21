<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;


Route::redirect('/', '/create');

Route::get('/create', [InquiryController::class, 'create'])->name('create');
Route::post('/save-session', [InquiryController::class, 'saveSession'])->name('save-session');
Route::get('/confirm', [InquiryController::class, 'confirm'])->name('confirm');
Route::post('/store', [InquiryController::class, 'store'])->name('store');



// お問い合わせフォーム入力ページ	/
// お問い合わせフォーム確認ページ	/confirm
// サンクスページ	/thanks
// 管理画面	/admin
// ユーザ登録ページ	/register
// ログインページ	/login