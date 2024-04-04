<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get-users', [UserController::class, 'getUsers']);

Route::get('/get-wallets', [WalletController::class, 'getWallets']);

Route::get('/get-wallet/{id}', [WalletController::class, 'getWallet']);

Route::get('/send/{senderid}/{receiverid}/{amount}', [WalletController::class, 'updateWallet']);
