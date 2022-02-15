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
        <form action="/clothes" method="POST">
            @csrf
            <div class="image_path">
                <h2>画像挿入</h2>
                <input type="text" name="clothe[image_path]" placeholder="写真追加"/>
            </div>
            <div class="brand">
                <h2>Brand</h2>
                <input type="text" name="clothe[brand]" placeholder="ブランド名"/>
                <p class="brand__error" style="color:red">{{ $errors->first('clothe.brand') }}</p>
            </div>
            <div class="favorite">
                <h2>お気に入り度</h2>
                <input type="text" name="clothe[favorite]" placeholder="1~4で評価"/>
            </div>
            <div class="cost">
                <h2>Cost</h2>
                <input type="number" name="clothe[cost]" placeholder="金額"/>
                <p class="cost__error" style="color:red">{{ $errors->first('clothe.cost') }}</p>
            </div>
            <div class="bought_at">
                <h2>date</h2>
                <input type="date" name="clothe[bought_at]" placeholder="購入日20○○-○○-○○"/>
                <p class="bought_at__error" style="color:red">{{ $errors->first('clothe.bought_at') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="clothe[body]" placeholder="○○で購入してきた。"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('clothe.body') }}</p>
            </div>
            <div class="category">
                <h2>Category</h2>
                <select name="clothe[category_id]">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                 </select>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
@endsection