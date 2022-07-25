@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-body">

                    <form action="{{ url('article') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="article-name" class="col-sm-3 control-label">Article name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="article-name" class="form-control">
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="article-description" class="col-sm-3 control-label">Article description</label>

                            <div class="col-sm-6">
                                <input type="text" name="description" id="article-description" class="form-control">
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="article-image" class="col-sm-3 control-label">Article image</label>

                            <div class="col-sm-6">
                                <input type="file" name="image" id="article-image" class="form-control">
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-plus"></i>Add article
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection