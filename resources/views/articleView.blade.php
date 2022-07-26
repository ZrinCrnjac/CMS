@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if(auth()->user() && auth()->user()->id == $article->user_id)
                    <br><a href="../edit/{{ $article->id }}">
                    <i class="fa fa-btn fa-pencil"></i>Edit article
                    </a>
                    @endif
                </div>
                <div class="panel-body">
                    <article>
                        <h2>{{ $article->name }}</h2>
                        <h4>{{ $article->description }}</h4>
                        <br>
                        <p> Slika: </p>
                        <img width="400" src="{{ asset('uploads/' . $article->image) }}" />
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection