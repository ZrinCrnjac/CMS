@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($articles as $article)
            <div class="container">
                <div class="card">
                    <div class="row g-0">
                    <div class="col-sm-4">
                        <img src="{{ asset('uploads/' . $article->image) }}" class="h-100 card-img" alt="..."
                    style="object-fit: cover;">
                    </div>
                    <div class="col-sm-8">
                        <div class="card-body">
                        <h5 class="card-title">
                            <a class="link-dark text-decoration-none" href="{{ url('article/details/' . $article->id ) }}">{{ $article->name }}</a>
                        </h5>
                        <p class="card-text">{{ $article->description }}</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
