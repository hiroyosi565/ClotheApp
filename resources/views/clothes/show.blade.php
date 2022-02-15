@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <titl>ClotheApp</titl></title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <small>{{ $clothe->user->name }}</small>
        <p class="edit">[<a href="/clothes/{{ $clothe->id }}/edit">編集</a>]</p>
        <form action="/clothes/{{ $clothe->id }}" id="form_delete" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" style="display:none">
            <p class='delete'>[<span onclick="return deleteClothe(this);">削除</span>]</p>
        </form>
        <h1 class="brand">
            {{ $clothe->brand }}
        </h1>
        <a href="/categories/{{ $clothe->category->id }}">{{ $clothe->category->name }}</a>
        <div class="clothe">
            <p class="image_path">{{$clothe->image_path}}</p>
                <p class="favorite">お気に入り度： {{$clothe->favorite}}</p>
                <h3>詳細</h3>
                <p class="bought_at">購入日： {{$clothe->bought_at}}</p>
                <p class="cost">¥{{$clothe->cost}}</p>
                <p class="body">{{ $clothe->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <script>
            function deleteClothe(e){
                'use strict'
                if (confirm('削除すると復元できません. \n本当に削除しますか? ')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
</html>
@endsection