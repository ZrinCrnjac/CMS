@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <tbody>
                            <tr>
                                <th>Role</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Edit role</th>
                                <th>Delete</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td class="table-text">{{ $roles[$user->role_id - 1]->name }}</td>
                                    <td class="table-text">{{ $user->name }}</td>
                                    <td class="table-text">{{ $user->email }}</td>
                                    <td>
                                        <form action="{{ url('user/edit/' . $user->id) }}" method="GET" style="display: inline-block;">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-warning">
                                                <i class="fa fa-btn fa-edit"></i>Edit
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ url('user/delete/' . $user->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Obriši
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