@extends('layouts.default')
@section('content')
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h1>入门心法</h1>
            <p class="lead"></p>
        </div>
    </header>

    <div class="container">
        <div class="marketing">
            <h1>入门心法微视频</h1>
            <p class="marketing-byline">点击播放按钮学习入门心法</p>

            <div class="row-fluid">
                <div class="span12">
                    <iframe width="850" height="500"
                            name="tsc_player"
                            src="/assets/rumenxinfa/rumenxinfa.html"
                            scrolling="no" frameborder="0"
                            webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>
@stop