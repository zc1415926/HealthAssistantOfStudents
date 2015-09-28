@extends('layouts.default')
@section('content')
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h1>管理员登录</h1>
        </div>
    </header>
    <div class="container">
        <br>
        @include('flash::message')

        <div class="row">
            <div class="span6 offset3">

                <div class="page-header">
                    <h1>Sign in!</h1>
                </div>

                <form method="post" action="/auth/login" id="formUserLogin">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="control-group">
                        <label class="control-label" for="inputUsername">Username：</label>
                        <div class="controls">
                            <input class="span6" type="text" id="inputUsername"
                                   name="username" placeholder="username">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Password：</label>
                        <div class="controls">
                            <input class="span6" type="password" id="inputPassword"
                                   name="password" placeholder="password">
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop