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
    $allcrypto = [
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
        'crypto' => $allcrypto, // uguale: compact('allcrypto')

    ];
    return view('home', $data);
})->name('home');

Route::get('coins/btc', function () {
    $crypto =
        [
            'nome' => 'Bitcoin',
            'ticker' => 'BTC',
            'prezzo_usd' => '66932.56'
        ];
    $allcrypto = [
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
        'allcrypto' => $allcrypto, // uguale: compact('allcrypto')

    ];
    return view('coins/btc', $data);
})->name('BTC');

Route::get('coins/eth', function () {
    $crypto =
        [
            'nome' => 'Ethereum',
            'ticker' => 'ETH',
            'prezzo_usd' => '3804.50'
        ];
    $allcrypto = [
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
        'allcrypto' => $allcrypto, // uguale: compact('allcrypto')

    ];
    return view('coins/eth', $data);
})->name('ETH');

Route::get('coins/bnb', function () {
    $crypto = [
        'nome' => 'Binance Coin',
        'ticker' => 'BNB',
        'prezzo_usd' => '421.91'
    ];
    $allcrypto = [
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
        'allcrypto' => $allcrypto, // uguale: compact('allcrypto')

    ];
    return view('coins/bnb', $data);
})->name('BNB');

Route::get('coins/usdt', function () {
    $crypto = [
        'nome' => 'Tether USD',
        'ticker' => 'USDT',
        'prezzo_usd' => '0.999'
    ];
    $allcrypto = [
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
        'allcrypto' => $allcrypto, // uguale: compact('allcrypto')

    ];
    return view('coins/usdt', $data);
})->name('USDT');

Route::get('coins/pepe', function () {
    $crypto = [
        'nome' => 'Pepe Coin',
        'ticker' => 'PEPE',
        'prezzo_usd' => '0.00000758'
    ];
    $allcrypto = [
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
        'allcrypto' => $allcrypto, // uguale: compact('allcrypto')
    ];
    return view('coins/pepe', $data);
})->name('PEPE');
