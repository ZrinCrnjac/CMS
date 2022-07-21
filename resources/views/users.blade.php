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
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td class="table-text">{{ $roles[$user->id - 1]->name }}</td>
                                    <td class="table-text">{{ $user->name }}</td>
                                    <td class="table-text">{{ $user->email }}</td>
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