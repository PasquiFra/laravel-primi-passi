@php

namespace Resources\Views;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{env('APP_NAME', 'Laravel Primi Passi')}}</title>

    @vite('resources/js/app.js')
</head>
<body>
    <h1>My Crypto Laravel</h1>
    <ul>
        @forelse ( $crypto as $c)
        <li>
            <div>Nome: <strong><a href="{{ route($c['ticker']) }}"> {{ $c['nome'] }} </a></strong></div>         
            <div>Ticker: <strong><a> {{ $c['ticker'] }} </a></strong></div>         
            <div>Prezzo: USD <strong>{{ $c['prezzo_usd'] }}</strong></div>                
        </li>
        @empty
        <h3><strong>CHIUSO!</strong></h3>
        <li>
            Il mercato è aperto dal Lun al Ven, dalle ore 9:00 alle ore 17:00. Festivi esclusi
        </li>
        @endforelse
    </ul>
</body>
</html>