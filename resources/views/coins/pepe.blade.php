@php

namespace Resources\Views\Coins;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{$crypto['ticker']}}</title>

</head>
<body>
    <h1>{{$crypto['nome']}}</h1>
    <ul>
        @if ($crypto)
        
        <li>
            <div>Nome: <strong><a href="{{ route($crypto['ticker']) }}"> {{ $crypto['nome'] }} </a></strong></div>         
            <div>Ticker: <strong><a> {{ $crypto['ticker'] }} </a></strong></div>         
            <div>Prezzo: USD <strong>{{ $crypto['prezzo_usd'] }}</strong></div>                
        </li>
        <ul>
            <li>
                <a href="{{ route('home') }}"> Torna alla Home </a>
            </li>
            @foreach ($allcrypto as $a)
            <li>
                <a href="{{ route($a['ticker']) }}"> Vai a {{$a['nome']}} </a>
            </li>
            @endforeach
        </ul>
        
        @else
        <h3><strong>CHIUSO!</strong></h3>
        <li>
            Il mercato è aperto dal Lun al Ven, dalle ore 9:00 alle ore 17:00. Festivi esclusi
        </li>

        @endif
    </ul>
</body>
</html>