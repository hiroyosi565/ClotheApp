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