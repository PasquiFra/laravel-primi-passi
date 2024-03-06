<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $crypto = [
        [
            'nome' => 'Bitcoin',
            'ticker' => 'BTC',
            'prezzo_usd' => '66932.56'
        ],
        [
            'nome' => 'Ethereum',
            'ticker' => 'ETH',
            'prezzo_usd' => '3804.50'
        ],
        [
            'nome' => 'Tether USD',
            'ticker' => 'USDT',
            'prezzo_usd' => '0.999'
        ],
        [
            'nome' => 'Binance Coin',
            'ticker' => 'BNB',
            'prezzo_usd' => '421.91'
        ],
        [
            'nome' => 'Pepe Coin',
            'ticker' => 'PEPE',
            'prezzo_usd' => '0.00000758'
        ]
    ];
    $data = [
        'crypto' => $crypto, // uguale: compact('crypto')

    ];
    return view('home', $data);
});
