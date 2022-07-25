@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel heading">
                    Edit article
                </div>

                <div class="panel-body">

                    <form action="{{ url('/article/' . $article->id) }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="article-name" class="col-sm-3 control-label">Article name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="article-name" class="form-control" value="{{ old('article') ? old('article') : $article->name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="article-description" class="col-sm-3 control-label">Article description</label>

                            <div class="col-sm-6">
                                <input type="text" name="description" id="article-name" class="form-control" value="{{ old('article') ? old('article') : $article->description }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-save"></i>Save changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection