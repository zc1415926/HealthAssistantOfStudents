<!DOCTYPE html>
<html>
<head>
    <meta name="_token" content="{{ csrf_token() }}">

    <title>环肥燕瘦</title>

    <link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://v2.bootcss.com/assets/css/docs.css" rel="stylesheet">

    <!--[if lte IE 6]>
    <!-- bsie css 补丁文件 -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-ie6.min.css">

    <!-- bsie 额外的 css 补丁文件 -->
    <link rel="stylesheet" type="text/css" href="/css/ie.css">
    <![endif]-->

    <style>
        body{font-family:"ff-tisa-web-pro-1","ff-tisa-web-pro-2","Lucida Grande","Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Hiragino Sans GB W3","Microsoft YaHei UI","Microsoft YaHei","WenQuanYi Micro Hei",sans-serif;}
    </style>

    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery-validate/1.14.0/jquery.validate.min.js"></script>
    <!--[if lte IE 6]>
    <!-- bsie js 补丁只在IE6中才执行 -->
    <script type="text/javascript" src="/js/bootstrap-ie.js"></script>
    <![endif]-->
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
                        <a href="./index.html">课程首页</a>
                    </li>
                    <li class="">
                        <a href="./qingjingdaoru.html">情景导入</a>
                    </li>
                    <li class="">
                        <a href="./xinfarumen.html">入门心法</a>
                    </li>
                    <li class="">
                        <a href="./feishengmiji.html">飞升秘籍</a>
                    </li>
                    <li class="">
                        <a href="./jiujiaoyi.html">究极奥义</a>
                    </li>
                    <li class="">
                        <a href="./wulindahui.html">武林大会</a>
                    </li>
                    <li class="">
                        <a href="./kechengzongjie.html">课程总结</a>
                    </li>
                </ul>
                <ul class="nav pull-right">
                    @if(!Auth::check())
                        <li><a href="/auth/index">登录</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()['showname']}} <b class="caret"></b></a>
                            <ul class="dropdown-menu">
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
</html>
