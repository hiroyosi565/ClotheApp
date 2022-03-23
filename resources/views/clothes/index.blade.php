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
            <h5 class="navbar-brand my-0 mr-md-auto font-weight-normal" href="/">ClotheApp</h5>
            <!--<span  href="/" class="navbar-home">home</span>-->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categories/1">Outer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categories/2">Tops</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categories/3">Bottoms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categories/4">ACC</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="ブランド名で検索" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        
        <table class="table table-bordered text-center col-md-2">
            <div class='weathers'>
                <tr><img src="https://www.jma.go.jp/bosai/forecast/img/{{ $tomorrow_weathercode }}" alt="天気" width="100" height="100"></tr>
                <tr><p class='weather'>天気：{{ $tomorrow_weather }}</p></tr>
                <p class='temp_max'><td>最高気温：{{ $tomorrow_temp_max }}</td><td>最低気温：{{ $tomorrow_temp_min }}</td></p>
                <!--<p class='temp_min'></p>-->
            </div>
        </table>
        
        <p class='create text-center h4'>[<a href='/clothes/create'>追加</a>]</p>
        
        <form action='/users/{}/follow' method='POST'>
            <button>フォロー</button>
        </form>
        
        @if($clothes->count())
        <div class="container">
        <div class="card-deck mb-3 text-center">
            @foreach($clothes as $clothe)
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <a href="/clothes/{{ $clothe->id }}">{{ $clothe->brand }}</a>
                </div>
                <div class="card-body">
                    <a href="/clothes/{{ $clothe->id }}"><img src = "{{$clothe->image_path}}" width="200" height="240"></a>
                    <h1 class="card-title pricing-card-title">¥{{ $clothe->cost }} <small class="text-muted">/¥</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li></li>
                    </ul>
                </div>
            </div>
            @endforeach
        @else
            <p>見つかりませんでした。</p>
        @endif
        </div>
        </div>

        <div class='paginate'>
            {{ $clothes->links() }}
        </div>
    </body>
</html>
@endsection