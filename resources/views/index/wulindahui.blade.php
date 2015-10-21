@extends('layouts.default')
@section('content')
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h1>武林大会</h1>
        </div>
    </header>

    <div class="container">
        <div class="marketing">
            <h1>大会议程</h1>
            <br>
        </div>
        <div class="row">
            <div class="span8 offset2">
                <p class="lead">1. 以小组为单位，判断组内同学的BMI值是否达标。</p>
            </div>
            <div class="span8 offset2">
                <p class="lead">2. 探讨未达标的原因，并提出“如何达标”的建议。</p></p>
                <p class="lead">3. 小组长将建议写在留言区，<a href="/comment">点我留言</a>。</p>
            </div>
        </div>
    </div>
@stop