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
</head>
<body>
    <h1>ciao</h1>
    <ul>
        @foreach ($trains as $train)
            <li>{{$train["agency"]}}</li>
        @endforeach
    </ul>
</body>
</html>