@extends('layouts.default')
@section('content')
    <script>
        $(document).ready(function () {
            $.validator.messages.required = "";

            $('#formAddComment').validate(
                    {
                        rules: {
                            'inputGroup': "required",
                            'inputNormal': "required",
                            'inputLower': "required",
                            'inputUpper': "required",
                            'planOptionsRadios': "required",
                        }
                    }
            );
        });
        function OnCommentSubmit(name, comment)
        {

                $('input#hiddenName').val("第" +　$('input#inputGroup').val() + "组");
                $('p#confirmName').text("组别：" + $('input#hiddenName').val());

                $('input#hiddenComment').val("我们组有" +　$('input#inputNormal').val() + "个同学BMI值正常，"
                        +"我们组有" +　$('input#inputLower').val() + "个同学BMI值较低，"
                        +"我们组有" +　$('input#inputUpper').val() + "个同学BMI值较高。"
                );
                var radios=document.getElementsByName("planOptionsRadios");
                var plan = "";
                for(var i=0;i<radios.length;i++)
                {
                    if(radios[i].checked==true)
                    {
                        //alert();
                        plan = radios[i].value;
                        break;
                    }
                }
                $('input#hiddenComment').val($('input#hiddenComment').val() + "为了使BMI值达标，我们的方案是：" + plan);
                $('p#confirmComment').text("留言：" + $('input#hiddenComment').val());
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
            <div class="span6 offset4">

                <div class="page-header">
                    <h1> </h1>
                </div>

                <form method="post" action="/comment/add" id="formAddComment" class="">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" id="hiddenName" name="name" value="">
                    <input type="hidden" id="hiddenComment" name="comment" value="">

                    <label class="control-label" for="inputGroup">组别：</label>
                    <div class="control-group">
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <span class="add-on">第</span>
                                <input class="span2" id="inputGroup" name="inputGroup" type="text" placeholder="（填入阿拉伯数字）">
                                <span class="add-on">组</span>
                            </div>
                        </div>
                    </div>

                    <label class="control-label" for="inputComment">统计：</label>
                    <div class="control-group">
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <span class="add-on">我们组有</span>
                                <input class="span2" id="inputNormal" type="text" placeholder="（填入阿拉伯数字）">
                                <span class="add-on">个同学BMI值正常</span>
                            </div>
                        </div>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <span class="add-on">我们组有</span>
                                <input class="span2" id="inputLower" type="text" placeholder="（填入阿拉伯数字）">
                                <span class="add-on">个同学BMI值较低</span>
                            </div>
                        </div>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <span class="add-on">我们组有</span>
                                <input class="span2" id="inputUpper" type="text" placeholder="（填入阿拉伯数字）">
                                <span class="add-on">个同学BMI值较高</span>
                            </div>
                        </div>
                    </div>

                    <label class="control-label" for="">为了使BMI值达标，我们觉得可行的方案是：</label>
                    <div  class="control-group">
                        <label class="radio">
                            <input type="radio" name="planOptionsRadios" id="optionsRadios1" value="经常打球、荤素搭配、少吃泡面。">
                            1.经常打球、荤素搭配、少吃泡面。
                        </label>
                        <label class="radio">
                            <input type="radio" name="planOptionsRadios" id="optionsRadios2" value="经常跑步、多吃蔬果、少喝可乐。">
                            2.经常跑步、多吃蔬果、少喝可乐。
                        </label>
                        <label class="radio">
                            <input type="radio" name="planOptionsRadios" id="optionsRadios3" value="经常跳绳、作息规律、少吃烧烤。">
                            3.经常跳绳、作息规律、少吃烧烤。
                        </label>
                        <label class="radio">
                            <input type="radio" name="planOptionsRadios" id="optionsRadios4" value="多吃粗粮、积极运动、不熬夜打游戏。">
                            4.多吃粗粮、积极运动、不熬夜打游戏。
                        </label>
                        <label class="radio">
                            <input type="radio" name="planOptionsRadios" id="optionsRadios5" value="久坐不动、常吃泡面、经常去肯德基。">
                            5.久坐不动、常吃泡面、经常去肯德基。
                        </label>
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