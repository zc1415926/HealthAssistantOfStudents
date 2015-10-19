@extends('layouts.default')
@section('content')
    <script>
        $(document).ready(function () {
            $.validator.messages.required = "亲，这里没有填哦！";

            $('#formAddComment').validate(
                    {
                        rules: {
                            'name': "required",
                            'comment': "required",
                        }
                    }
            );
        });
        function OnCommentSubmit(name, comment)
        {
            $('p#confirmName').text("姓名：" +　name);
            $('p#confirmComment').text("留言：" + comment);
            $('#modalConfirmComment').modal('show');

        }
        function OnConfirmCommentClicked()
        {
            $('#modalConfirmComment').modal('hide');
            $('#formAddComment').submit();
        }
    </script>
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
                        <label class="control-label" for="inputName">组别：</label>
                        <div class="controls">
                            <input class="span6" type="text" id="inputName"
                                   name="name" placeholder="组别" value="第？组">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="inputComment">留言：</label>
                        <div class="controls">
                            <textarea id="inputComment" class="span6" name="comment"
                                      rows="5" placeholder="请在这里留言">
我们组有？个同学BMI值正常，有？个同学BBMI值较低，有？个同学BBMI值较高。
为了使BMI值达标，我们是办法是：
                            </textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button type="button" class="btn btn-primary"
                                    onclick="OnCommentSubmit(
                                        $('input#inputName').val(),
                                        $('textarea#inputComment#inputComment').val())">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="modalConfirmComment" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="modalConfirmComment" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="h3ConfirmTitle">确认留言</h3>
        </div>
        <div class="modal-body">
            <p id="confirmName"></p>
            <p id="confirmComment"></p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
            <button class="btn btn-primary" onclick="OnConfirmCommentClicked()">确定</button>
        </div>
    </div>
@stop