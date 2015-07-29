<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--移动设备优先,为了确保适当的绘制和触屏缩放，需要在 <head> 之中添加 viewport 元数据标签。-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

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

    <div class="jumbotron masthead text-center">
        <div class="container">
            <h1>联结世界</h1>
            <h2>给您一个真正的互联网</h2>
            <p class="masthead-button-links">
                <a class="btn btn-primary btn-lg" href="#" role="button">立即购买</a>
                <a class="btn btn-primary btn-lg" href="#" role="button">免费试用</a>
            </p>
        </div>
    </div>

    <div class="container nav-service">
        <h2>优质服务</h2>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <img src="{{asset('/img/icon_ser_1.png')}}" alt="" class="img-responsive">
                <div class="caption">
                    <h3>真诚贴心服务</h3>
                    <p>
                        安心保障，首次购买3天内全额退款
                        新技术，新思维
                        新特权，心服务
                        快乐生活，放心消费
                        自由无处不在!
                    </p>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <img src="{{asset('/img/icon_ser_2.png')}}" alt="" class="img-responsive">
                <div class="caption">
                    <h3>多条快速海外线路</h3>
                    <p>
                        日本、美国、香港、台湾、英国、法国多条线路，稳定超流畅，上网如飞。
                    </p>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <img src="{{asset('/img/icon_ser_3.png')}}" alt="" class="img-responsive">
                <div class="caption">
                    <h3>多条快速海外线路</h3>
                    <p>
                        日本、美国、香港、台湾、英国、法国多条线路，稳定超流畅，上网如飞。
                    </p>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <img src="{{asset('/img/icon_ser_4.png')}}" alt="" class="img-responsive">
                <div class="caption">
                    <h3>全平台全设备</h3>
                    <p>
                        无需安装任何软件
                        全平台支持，无论在电脑前还是移动
                        中，都能畅游互联网
                        只需敲几下键盘，点几下鼠标
                        你的网络生活更自由更精彩！
                    </p>
                </div>
            </div>

        </div>

        <div class="container">
            <h2>价格</h2>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 ">
                    <table class="table table-bordered">
                        <tr><td>基础包月版 - ￥15/月</td></tr>
                        <tr><td>每月 10Gb 流量</td></tr>
                        <tr><td>线路任意切换</td></tr>
                        <tr><td>线路任意切换</td></tr>
                        <tr><td>可同时1台设备在线</td></tr>
                        <tr><td><button type="button" class="btn btn-primary">订购</button></td></tr>
                    </table>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 ">
                    <table class="table table-bordered">
                        <tr><td>基础包月版 - ￥15/月</td></tr>
                        <tr><td>每月 10Gb 流量</td></tr>
                        <tr><td>线路任意切换</td></tr>
                        <tr><td>线路任意切换</td></tr>
                        <tr><td>可同时1台设备在线</td></tr>
                        <tr><td><button type="button" class="btn btn-primary">订购</button></td></tr>
                    </table>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 ">
                    <table class="table table-bordered">
                        <tr><td>基础包月版 - ￥15/月</td></tr>
                        <tr><td>每月 10Gb 流量</td></tr>
                        <tr><td>线路任意切换</td></tr>
                        <tr><td>线路任意切换</td></tr>
                        <tr><td>可同时1台设备在线</td></tr>
                        <tr><td><button type="button" class="btn btn-primary">订购</button></td></tr>
                    </table>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3 ">
                    <table class="table table-bordered">
                        <tr><td>基础包月版 - ￥15/月</td></tr>
                        <tr><td>每月 10Gb 流量</td></tr>
                        <tr><td>线路任意切换</td></tr>
                        <tr><td>线路任意切换</td></tr>
                        <tr><td>可同时1台设备在线</td></tr>
                        <tr><td><button type="button" class="btn btn-primary">订购</button></td></tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="container">
            <h2>联系我们</h2>
            <h6>咨询,建议都可以联系我们</h6>
        </div>

    </div>


    <div class="modal fade bs-example-modal-sm" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">登录</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            div.
                        </div>
                    </div>
                    <p>用户名</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <ul class="list-inline text-center">
                <li><a href="#">©2015 isgavin.me 备案号:津ICP备15004268号-1</a></li>
            </ul>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>