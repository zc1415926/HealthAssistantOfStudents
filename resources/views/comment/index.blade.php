@extends('layouts.default')
@section('content')
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h1>学生留言</h1>
        </div>
    </header>
    <div class="container">

        <br>
        @include('flash::message')

        <div class="row">
            <div class="span6 offset3">

                <div class="page-header">
                    <h1>请填写留言</h1>
                </div>

                <form method="post" action="/comment/add" id="formAddComment">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="control-group">
                        <label class="control-label" for="inputName">姓名：</label>
                        <div class="controls">
                            <input class="span6" type="text" id="inputName"
                                   name="name" placeholder="姓名">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputComment">留言：</label>
                        <div class="controls">
                            <textarea class="span6" rows="5" placeholder="请在这里留言"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button type="button" class="btn btn-primary"
                                    onclick="onCommentSubmit()">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop