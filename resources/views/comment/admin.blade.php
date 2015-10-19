@extends('layouts.default')
@section('content')
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h1>管理学生留言</h1>
        </div>
    </header>

    <div class="container">
        <br>
        @include('flash::message')
        <table class="table table-striped">
            <thead>
            <tr>
                <th>组别</th>
                <th>留言</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                <tr><td>{{$comment->name}}</td>
                    <td>{{$comment->comment}}</td>
                    <td><a href="#" role="button" class="icon-remove uk-icon-hover"
                           onclick="OnDeleteCommentClicked('{{$comment->id}}',
                                                           '{{$comment->name}}',
                                                           '{{$comment->comment}}')"></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div id="modalDeleteComment" class="modal hide fade" tabindex="-1" role="dialog"
         aria-labelledby="modalDeleteComment" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3>确认删除以下留言</h3>
        </div>
        <div class="modal-body">
            <p id="confirmName"></p>
            <p id="confirmComment"></p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
            <button class="btn btn-danger" onclick="OnConfirmDeleteCommentClicked()">删除</button>
        </div>
        <form method="post" action="/comment/delete" id="formDeleteComment" class="hide">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input id="inputCommentId" type="hidden" name="commentId" value="">
        </form>
    </div>

    <script>
        function OnDeleteCommentClicked(id, name, comment)
        {
            $('p#confirmName').text("姓名：" +　name);
            $('p#confirmComment').text("留言：" + comment);
            $('#modalDeleteComment').modal('show');
            $('input#inputCommentId').val(id);
        }
        function OnConfirmDeleteCommentClicked()
        {
            $('#formDeleteComment').submit();
            $('#modalDeleteComment').modal('hide');
        }
    </script>

@stop