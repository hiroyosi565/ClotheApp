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
                    <h2 class='brand'>
                        <a href="/clothes/{{ $clothe->id }}">{{ $clothe->brand }}</a>
                    </h2>
                    <p><a href="/categories/{{ $clothe->category->id }}">{{ $clothe->category->name }}</a></p>
                    <p class='cost'>¥{{ $clothe->cost }}</p>
                    <p class='body'>{{ $clothe->body }}</p>
                    <p class='delete'><button onclick="return deleteClothe(this);">削除</button></p>
                </div>
            @endforeach
        </div
        <div class="back">[<a href="/">back</a>]</div>
        
        <!--paginateとは項目が上限を超すと新たに次のページアクセスできるようになっている。-->
        <div class='paginate'>
            {{ $clothes->links() }}
        </div>
        
        <script>
            function deleteClothe(e){
                'use strict'
                if (confirm('削除すると復元できません. \n本当に削除しますか? ')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
        <div class='paginate'>
            {{ $clothes->links() }}
        </div>
    </body>
    @endsection