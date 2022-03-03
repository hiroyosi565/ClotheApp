@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClotheApp</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand">ClotheApp</a>
            <!--<span  href="/" class="navbar-home">home</span>-->
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/categories/1">Outer</a>
                <a class="nav-item nav-link" href="/categories/2">Tops</a>
                <a class="nav-item nav-link" href="/categories/3">Bottoms</a>
                <a class="nav-item nav-link" href="/categories/4">ACC</a>
                <form action='/' method="GET">
                    <div class="input-group">
                        <input type="text" name="keyword" id="txt-search" class="form-control input-group-prepend" placeholder="ブランド名で検索">
                        <span class="input-group-btn input-group-append">
                            <input type="submit" id="btn-search" class="btn btn-primary" value="検索">
                        </span>
                    </div>
                </form>
            </div>
        </nav>
        
        
        @if($clothes->count())
        <table border="1">
            <tr>
                <th>brand</th>
                <th>cost</th>
                <th>画像</th>
            </tr>
            @foreach ($clothes as $clothe)
            <tr>
                <td>{{ $clothe->brand }}</td>
                <td>{{ $clothe->cost }}</td>
                <td><img src = "{{$clothe->image_path}}" width="200" height="240"></td>
            </tr>
            @endforeach
        </table>
        @else
        <p>見つかりませんでした。</p>
        @endif
        
        <table class="table table-bordered">
            <div class='weathers'>
                <tr><img src="https://www.jma.go.jp/bosai/forecast/img/{{ $tomorrow_weathercode }}" alt="天気" width="100" height="100"></tr>
                <p class='weather'><tr>天気{{ $tomorrow_weather }}</tr></p>
                <p class='temp_max'><td>最高気温：{{ $tomorrow_temp_max }}</td><td>最低気温：{{ $tomorrow_temp_min }}</td></p>
                <!--<p class='temp_min'></p>-->
            </div>
        </table>
        <p class='create'>[<a href='/clothes/create'>追加</a>]</p>
        
        <div class='clothes'>
            @foreach ($clothes as $clothe)
                <div class='clothe'>
                    <small>{{ $clothe->user->name }}</small>
                    <h2 class='brand'>
                        <a href="/clothes/{{ $clothe->id }}">{{ $clothe->brand }}</a>
                    </h2>
                    <p class='cost'>¥{{ $clothe->cost }}</p>
                    <a href="/categories/{{ $clothe->category->id }}">{{ $clothe->category->name }}</a>
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