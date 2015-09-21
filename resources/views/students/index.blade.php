@extends('layouts.default')
@section('content')
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h1>管理学生信息</h1>
        </div>
    </header>

    <div class="container">
        <br>
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
                        <td><a href="#" class="icon-remove uk-icon-hover"></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@stop