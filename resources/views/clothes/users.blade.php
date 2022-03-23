@extends('layouts.app')

@section('content')
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


@endsection