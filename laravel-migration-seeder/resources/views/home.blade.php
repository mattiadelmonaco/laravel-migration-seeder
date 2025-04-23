@php
    // dd($trains);
@endphp

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treni Laravel</title>
    @vite(['resources/sass/app.scss', "resources/js/app.js"])
    {{-- GOOGLE FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1>LaravelTrains</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <ul class="list-unstyled">
                @foreach ($trains as $train)
                    <li>
                        <span>{{$train["departure_date"]}}</span>
                        <span>{{$train["agency"]}}</span>
                        <span>{{$train["train_code"]}}</span>
                        <span>{{$train["departure_station"]}}</span>
                        <span>{{$train["departure_time"]}}</span>
                        <span>{{$train["arrival_station"]}}</span>
                        <span>{{$train["arrival_time"]}}</span>
                        <span>{{$train["total_carriages"]}}</span>
                        
                        @if ($train["on_time"] === 1)
                        <span>IN ORARIO</span>
                        @else 
                        <span>IN RITARDO</span>
                        @endif 

                        @if ($train["if_cancelled"] === 0)
                        <span>NON CANCELLATO</span>
                        @else
                        <span>CANCELLATO</span>
                        @endif


                    </li>
                @endforeach
            </ul>
        </div>
    </main>

    <footer>
        <div class="container">
            <h5>Made with ♥ by Mattia</h5>
        </div>
    </footer>
</body>
</html>