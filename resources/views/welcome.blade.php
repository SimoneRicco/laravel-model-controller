<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <h1 class="text-center">Ciao da vite</h1>
        <div class="container d-flex flex-wrap">
            @foreach ($movies as $item)
            <div class="card m-auto" style="width: 18rem;">
                <div class="card-header">
                    <h5 class="card-title">{{ $item['title'] }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Titolo originale: {{ $item['original_title'] }}</p>
                    <p class="card-text">Nazionalità: {{ $item['nationality'] }}</p>
                    <p class="card-text">Data: {{ $item['date'] }}</p>
                    <p class="card-text">Voto: {{ $item['vote'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
        {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}
    </body>
</html>
