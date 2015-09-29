@extends('layouts.default')
@section('content')
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h1>飞升秘籍</h1>
            <p class="lead"></p>
        </div>
    </header>


    <div class="container">
        <div class="marketing">
            <h1>飞升微视频</h1>
            <p class="marketing-byline">认真学习完成飞升之旅</p>
            <div class="row-fluid">
                <div class="span12">
                    <iframe  class="tscplayer_inline" name="tsc_player"
                             src="/assets/feishengmiji/FeiShengMiJi_player.html" scrolling="no"
                             frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>
@stop