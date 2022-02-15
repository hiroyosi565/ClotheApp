@extends('layouts.app')

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ClotheApp</title>
    </head>
    <body>
        <h1>ClotheApp</h1>
        <form action="/clothes/{{ $clothe->id }}" method="POST">
            {{ @csrf_field() }}
            @method('PUT')
            <div class="image_path">
                <h2>画像挿入</h2>
                <input type="text" name="clothe[image_path]" value="{{ $clothe->image_path }}"/>
            </div>
            <div class="brand">
                <h2>Brand</h2>
                <input type="text" name="clothe[brand]" value="{{ $clothe->brand }}">
            </div>
            <div class="favorite">
                <h2>お気に入り度</h2>
                <input type="text" name="clothe[favorite]" value="{{ $clothe->favorite }}"/>
            </div>
            <div class="cost">
                <h2>Cost</h2>
                <input type="number" name="clothe[cost]" value="{{ $clothe->cost }}"/>
            </div>
            <div class="bought_at">
                <h2>date</h2>
                <input type="date" name="clothe[bought_at]" value="{{ $clothe->bought_at }}"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea type="text" name="clothe[body]" value="{{ $clothe->body }}"></textarea>
            </div>
            <div class="category">
                <h2>Category</h2>
                <select name="clothe[category_id]">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                 </select>
            </div>
            <input type="submit" value="update"/>
        </form>
        
        <div class="back">[<a href="/clothes/{{ $clothe->id }}">back</a>]</div>
    </body>
</html>
@endsection