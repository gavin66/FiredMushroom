<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--移动设备优先,为了确保适当的绘制和触屏缩放，需要在 <head> 之中添加 viewport 元数据标签。-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <!-- Laravel token 存放在 meta 标签中, 然后使用 jQuery 将它加入到所有的请求头中-->
    <meta name="csrf-token" content="{{ csrf_token()}}" />

    <!-- 在移动设备浏览器上，通过为视口（viewport）设置 meta 属性为 user-scalable=no 可以禁用其缩放（zooming）功能。
        这样禁用缩放功能后，用户只能滚动屏幕，就能让你的网站看上去更像原生应用的感觉。注意，这种方式不推荐所有网站使用，需看情况而定-->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->

    <title>@yield('title','laravel5')</title>

    <!-- Bootstrap css-->
    <link href="//apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/css/site.css') }}" rel="stylesheet">
</head>
<body>
    <header class="navbar navbar-inverse navbar-fixed-top" id="top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar" aria-expanded="false">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">FiredMushroom</a>
            </div>
            <nav class="collapse navbar-collapse" id="bs-navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">主页</a></li>
                    <li><a href="#">产品</a></li>
                    <li><a href="#">试用</a></li>
                    <li><a href="#">帮助</a></li>
                    <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">登录</a></li>
                </ul>
            </nav>
        </div>
    </header>

    @section('content')

    @show

    <footer>
        <div class="container">
            <ul class="list-inline text-center">
                <li><a href="#">©2015 isgavin.me 备案号:津ICP备15004268号-1</a></li>
            </ul>
        </div>
    </footer>

    <!-- jquery 使用bootstrap等其他框架,插件必须导入的-->
    <script src="//apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- bootstrap的主要js-->
    <script src="//apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="{{ asset('/js/base/config.js') }}"></script>
    <script src="{{ asset('/js/base/tools.js') }}"></script>
    <!-- angular的主要js-->
    <!--<script src="//apps.bdimg.com/libs/angular.js/1.4.0-beta.4/angular.min.js"></script> -->
    @section('js')

    @show
</body>
</html>