@extends('layouts.default')
@section('content')
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h1>武林大会</h1>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="span6 offset3">
                <div class="page-header">
                    <h1>大会议程</h1>
                </div>

                <p class="lead">1. 判断自己和组内成员BMI值是否达标。</p>
                <img src="img/bmi.jpg">

                <p class="lead">2. 小组合作探讨未达标的原因，利用网络搜索答案等方法，提出如何达标的方案。</p></p>
                <p class="lead">3. <a href="/comment">点我提交“达标方案”。</a></p>
            </div>
        </div>
    </div>
@stop