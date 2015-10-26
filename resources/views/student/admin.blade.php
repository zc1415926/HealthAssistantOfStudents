@extends('layouts.default')
@section('content')
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h1>管理学生信息</h1>
        </div>
    </header>

    <div class="container">
        <br>
        @include('flash::message')
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>序号</th>
                    <th>性别</th>
                    <th>身高（m）</th>
                    <th>体重（kg）</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr><td>{{$student->num}}</td>
                        <td>{{$student->sex}}</td>
                        <td>{{$student->height}}</td>
                        <td>{{$student->weight}}</td>
                        <td><a href="#" role="button" class="icon-remove uk-icon-hover"
                               onclick="OnDeleteStudentClicked('{{$student->id}}','{{$student->num}}')"></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <hr>
        <a href="/student/export" class="btn btn-large btn-primary">导出学生信息到Excel</a>
    </div>

    <div id="modalDeleteStudent" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">警告</h3>
        </div>
        <div class="modal-body">
            <p id="confirmName">确实要删除学生“”吗？</p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
            <button class="btn btn-danger" onclick="OnConfirmDeleteStudentClicked()">删除</button>
        </div>
        <form method="post" action="/student/delete" id="form-delete-student" class="hide">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" id="student-id" name="student-id" value="">
            <input type="hidden" id="student-name" name="student-name" value="">
        </form>
    </div>

    <script>
        function OnDeleteStudentClicked(id, num)
        {
            $('p#confirmName').text("确实要删除学生“" +　num + "”吗？");
            $('#modalDeleteStudent').modal('show');
            $('input#student-id').val(id);
            $('input#student-name').val(num);
        }

        function OnConfirmDeleteStudentClicked()
        {
            $('#form-delete-student').submit();
            $('#modalDeleteComment').modal('hide');
        }
    </script>
@stop