@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClotheApp</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
    <body>
        <h1>ClotheApp</h1>
        <div class='weathers'>
            <img src="https://www.jma.go.jp/bosai/forecast/img/{{ $tomorrow_weathercode }}" alt="天気" width="100" height="100">
            <p class='weather'>天気{{ $tomorrow_weather }}</p>
            <p class='temp_max'>最高気温：{{ $tomorrow_temp_max }}</p>
            <p class='temp_min'>最低気温：{{ $tomorrow_temp_min }}</p>
        </div>
        <p class='create'>[<a href='/clothes/create'>追加</a>]</p>
        
        <div class='clothes'>
            @foreach ($clothes as $clothe)
                <div class='clothe'>
                    <small>{{ $clothe->user->name }}</small>
                    <h2 class='brand'>
                        <a href="/clothes/{{ $clothe->id }}">{{ $clothe->brand }}</a>
                    </h2>
                    <p class='cost'>¥{{ $clothe->cost }}</p>
                    <p class='body'>{{ $clothe->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $clothes->links() }}
        </div>
    </body>
</html>
@endsection