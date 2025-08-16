<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;


Route::redirect('/', '/create');

Route::get('/create', [InquiryController::class, 'create'])->name('create');


// お問い合わせフォーム入力ページ	/
// お問い合わせフォーム確認ページ	/confirm
// サンクスページ	/thanks
// 管理画面	/admin
// ユーザ登録ページ	/register
// ログインページ	/login