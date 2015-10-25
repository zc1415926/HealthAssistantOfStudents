<!DOCTYPE html>
<html>
<head>
    <meta name="_token" content="{{ csrf_token() }}">

    <title>数据的计算与分析</title>

    <link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://v2.bootcss.com/assets/css/docs.css" rel="stylesheet">

    <style>
        body{font-family:"ff-tisa-web-pro-1","ff-tisa-web-pro-2","Lucida Grande","Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Hiragino Sans GB W3","Microsoft YaHei UI","Microsoft YaHei","WenQuanYi Micro Hei",sans-serif;}
        .tscplayer_inline {
            position: static;
            margin: 30px;
            width: 854px;
            height: 466px;
            z-index: auto;}

        .iframe{
            vertical-align: middle;
        }

        table {
            font-size: 21px;
        }

        .table th, .table td {
            line-height: 40px;
        }

        p.lead {
            line-height: 40px;
        }

        label.control-label {
            font-size: 16px;
            font-weight: bold;
        }

        .control-group {
            padding-left: 2em;
            padding-bottom: 2em;
        }
    </style>

    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery-validate/1.14.0/jquery.validate.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="./index.html">环肥燕瘦</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active">
                        <a href="/">课程首页</a>
                    </li>
                    <li class="">
                        <a href="/qingjingdaoru">风起云涌</a>
                    </li>
                    <li class="">
                        <a href="/rumenxinfa">入门心法</a>
                    </li>
                    <li class="">
                        <a href="/feishengmiji">飞升秘籍</a>
                    </li>
                    <li class="">
                        <a href="/jiujiaoyi">究极奥义</a>
                    </li>
                    <li class="">
                        <a href="/wulindahui">武林大会</a>
                    </li>
                    <li class="">
                        <a href="/kechengzongjie">一统江湖</a>
                    </li>
                </ul>
                <ul class="nav pull-right">
                    @if(!Auth::check())
                        <li><a href="/auth/index">登录</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()['showname']}} <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/student/admin">学生管理</a></li>
                                <li><a href="/comment/admin">留言管理</a></li>
                                <li class="divider"></li>
                                <li><a href="/auth/logout">登出</a></li>
                            </ul>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</div>

@yield('content')

</body>
<footer class="footer">
    <div class="container">
        <p>数据的计算与分析</p>
        <p>2015</p>
    </div>
</footer>
</html>
