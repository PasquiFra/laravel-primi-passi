@php

namespace Resources\Views;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laravel Primi Passi</title>

</head>
<body>
    <h1>My Crypto Laravel</h1>

    <ul>
        @foreach ( $crypto as $c)
        <li>
            <div>Nome: <strong> {{ $c['nome'] }} </strong></div>         
            <div>Ticker: <strong>{{ $c['ticker'] }}</strong></div>         
            <div>Prezzo: USD <strong>{{ $c['prezzo_usd'] }}</strong></div>                
        </li>
        @endforeach
    </ul>
</body>
</html>