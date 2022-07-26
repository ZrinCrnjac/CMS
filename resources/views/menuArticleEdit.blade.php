@extends('layouts.app')

@section('content')

<form action="{{ url('saveArticle') }}" method="POST" class="container col-md-4 col-md-offset-4">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="name" id="name" required>
    </div>

    <div class="form-group">
        <label for="order">Order</label>
        <input class="form-control" type="text" name="order" id="order" required>
    </div>

    <div class="form-group">
        <label for="menu_id">Menus</label>
        <select class="form-control" name="menu_id" id="menu_id">
            <option disabled>Choose Menu</option>
            @foreach ($menus as $menu)
                <option value="{{ $menu->id }}">{{ $menu->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="article_id">Articles</label>
        <select class="form-control" name="article_id" id="article_id">
            <option disabled>Choose article</option>

            @foreach($articles as $article)
                <option value="{{ $article->id }}">{{ $article->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection