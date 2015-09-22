@extends('layouts.default')
    @section('content')
        <script language="JavaScript">
            $(document).ready(function()
            {
                $.validator.messages.required = "亲，这里没有填哦！";

                $('#formAddStudent').validate(
                        {
                            rules:
                            {
                                'name'     :   "required",
                                'age'      :   "required",
                                'height'   :   "required",
                                'weight'   :   "required",
                            }
                        }
                );
            });

            function onStudentSubmit()
            {
                if($('#formAddStudent').valid())
                {
                    $('#formAddStudent').submit();
                }
            }
        </script>

        <header class="jumbotron subhead" id="overview">
            <div class="container">
                <h1>健康信息统计</h1>
            </div>
        </header>
        <div class="container">

            <br>
            @include('flash::message')

            <div class="row">
                <div class="span3"></div>
                <div class="span3">
                    <section id="typography">
                        <div class="page-header">
                            <h1>请填写表单</h1>
                        </div>

                        <div class="container">
                            <form method="post" action="/student/add" id="formAddStudent" class="form-horizontal">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="control-group">
                                    <label class="control-label" for="inputName">姓名：</label>
                                    <div class="controls">
                                        <input type="text" id="inputName" name="name" placeholder="姓名">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputSex">姓别：</label>
                                    <div class="controls">
                                        <select id="inputSex" name="sex">
                                            <option>女</option>
                                            <option>男</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputAge">年龄：</label>
                                    <div class="controls">
                                        <input type="text" id="inputAge" name="age" placeholder="Email">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputHeight">身高：</label>
                                    <div class="controls">
                                        <input type="text" id="inputHeight" name="height" placeholder="身高">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputWeight">体重：</label>
                                    <div class="controls">
                                        <input type="text" id="inputWeight" name="weight" placeholder="体重">
                                    </div>
                                </div>
                                <div class="control-group">

                                    <div class="controls">
                                        <button type="button" class="btn btn-primary"
                                                onclick="onStudentSubmit()">提交</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
                <div class="span3"></div>
            </div>
        </div>
    @endsection
@stop