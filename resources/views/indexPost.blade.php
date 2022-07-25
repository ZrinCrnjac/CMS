@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Articles</div>
                <div class="panel-body">
                    <a href="{{ url('article/new/') }}"><button type="submit" class="btn btn-success">
                        <i class="fa fa-btn fa-save"></i>New article
                    </button></a>
                    <table class="table table-striped task-table">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach($articles as $article)
                                <tr>
                                    <td class="table-text">{{ $article->name }}</td>
                                    <td class="table-text">{{ $article->description }}</td>
                                    <td>
                                        <form action="{{ url('article/edit/' . $article->id) }}" method="GET" style="display: inline-block;">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-warning">
                                                <i class="fa fa-btn fa-edit"></i>Edit
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ url('article/delete/' . $article->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection