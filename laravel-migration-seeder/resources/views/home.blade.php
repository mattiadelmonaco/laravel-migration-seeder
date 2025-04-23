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
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
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
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Data di partenza</th>
                        <th scope="col">Treno</th>
                        <th scope="col">Partenza</th>
                        <th scope="col">Orario di partenza</th>
                        <th scope="col">Arrivo</th>
                        <th scope="col">Orario di arrivo</th>
                        <th scope="col">Numero carrozze</th>
                        <th scope="col">Ritardo</th>
                        <th scope="col">Corsa cancellata</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <td>{{ $train['departure_date'] }}</td>
                            <td>{{ $train['agency'] }} - {{ $train['train_code'] }}</td>
                            <td>{{ $train['departure_station'] }}</td>
                            <td>{{ $train['departure_time'] }}</td>
                            <td>{{ $train['arrival_station'] }}</td>
                            <td>{{ $train['arrival_time'] }}</td>
                            <td>{{ $train['total_carriages'] }}</td>

                            @if ($train['on_time'] === 1)
                                <td>IN ORARIO</td>
                            @else
                                <td>IN RITARDO</td>
                            @endif

                            @if ($train['if_cancelled'] === 0)
                                <td>NON CANCELLATO</td>
                            @else
                                <td>CANCELLATO</td>
                            @endif


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <div class="container">
            <h5>Made with ♥ by Mattia</h5>
        </div>
    </footer>
</body>

</html>
