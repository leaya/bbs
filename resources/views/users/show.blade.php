@extends('layouts.app')
@section('title', $user->name.'的个人中心')

@section('content')
    <div class="row">

        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div class="center">
                            <img src="{{ asset('images/avatars/default.png') }}" alt="" class="thumbnail img-resposive">
                        </div>
                        <div class="media-body">
                            <hr>
                            <h4><strong>个人简介</strong></h4>
                            <p>我出生在上海，现是一位自由职业者，热爱程序开心，精通SEO搜索引擎优化。</p>
                            <hr>
                            <h4><strong>注册于</strong></h4>
                            <p>January 01 2000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <span>
                        <h1 class="panel-title pull-left" style="font-size:30px">{{ $user->name }} <small>{{ $user->email }}</small></h1>
                    </span>
                </div>
            </div>
            <hr>

            <div class="panel panel-default">
                <div class="panel-body">
                    暂无数据 ~_~
                </div>
            </div>
        </div>
    </div>
@endsection