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
                    <th>姓名</th>
                    <th>性别</th>
                    <th>年龄</th>
                    <th>身高</th>
                    <th>体重</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr><td>{{$student->name}}</td>
                        <td>{{$student->sex}}</td>
                        <td>{{$student->age}}</td>
                        <td>{{$student->height}}</td>
                        <td>{{$student->weight}}</td>
                        <td><a href="#myModal" role="button" class="icon-remove uk-icon-hover"
                               data-toggle="modal"></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">警告</h3>
        </div>
        <div class="modal-body">
            <p>确实要删除学生“{{$student->name}}”吗？</p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
            <button class="btn btn-danger" onclick="OnDeleteStudentClicked({{$student->id}})">删除</button>
        </div>
        <form method="post" action="/student/delete" id="form-delete-student">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="student-id" value="{{$student->id}}">
            <input type="hidden" name="student-name" value="{{$student->name}}">
        </form>
    </div>

    <script>
        function OnDeleteStudentClicked(id)
        {
            $('#form-delete-student').submit();
        }
    </script>

@stop