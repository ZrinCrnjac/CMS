@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel heading">
                    Edit menu
                </div>

                <div class="panel-body">

                    <form action="{{url('menu/' . $menu->id)}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="menu-name" class="col-sm-3 control-label">Menu name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="menu-name" class="form-control" value="{{ old('menu') ? old('menu') : $menu->name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-save"></i>Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection