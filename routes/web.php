<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;

use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'index']);
Route::get('/contato', [SiteController::class, 'contact']);

#ROTAS DE SUPORTE
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
