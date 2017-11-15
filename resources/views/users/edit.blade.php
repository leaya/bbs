@extends('layouts.app')
@section('title', '编辑个人资料')

@section('content')
    <div class="container">
        <div class="panel panel-default col-md-10 col-md-offset-1">
            <div class="panel-heading">
                <h4>
                    <i class="glyphicon glyphicon-edit"></i> 编辑个人资料
                </h4>
            </div>

            @include('common.error')

            <div class="panel-body">
                <form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8">
                    {{method_field('PUT')}}
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="name" class="control-label">用户名:</label>
                        <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">邮箱:</label>
                        <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}">
                    </div>

                    <div class="form-group">
                        <label for="bio" class="control-label">个人简介:</label>
                        <textarea id="bio" name="bio" class="form-control">{{ old('bio', $user->bio) }}</textarea>
                    </div>

                    <div class="form-group">
                        <avatar image="{{asset($user->avatar)}}"></avatar>
                    </div>

                    <div class="well well-sm">
                        <button class="btn btn-primary" type="submit">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection