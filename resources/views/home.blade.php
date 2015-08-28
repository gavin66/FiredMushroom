@extends('app')

@section('content')
    <div class="jumbotron masthead text-center">
        <div class="container">
            <h1>联结世界</h1>
            <h2>给您一个真正的互联网|{{Cookie::get('is_login')}}|</h2>
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
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">登录</h4>
                </div>
                <div class="modal-body">
                    <form id="form-login">
                        <div class="sms">
                            <p class="text-right"><span class="glyphicon glyphicon-phone"></span><a href="">短信快捷登录</a></p>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-lg" name="email" placeholder="手机/邮箱/用户名">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" name="password" placeholder="密码">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> 下次自动登录
                            </label>
                            <a class="pull-right" href="">忘记密码?</a>
                        </div>
                        <button type="button" id="login_commit" class="btn btn-primary btn-block btn-lg">登录</button>
                        <div>
                            <p class="text-right"><a href="">立即注册</a></p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p class="text-left">可以使用以下方式登录</p>
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="//cdn.bootcss.com/jquery-validate/1.14.0/jquery.validate.min.js"></script>
    <script src="{{ asset('/js/spare/messages_zh.min.js') }}"></script>
    <script type="text/javascript">
        $(function(){
            //初始化表单验证
            loginValidator.init();
        });

        //表单验证
        var loginValidator = function() {
            var handleSubmit = function() {
                $('#form-login').validate({
                    debug:true,
                    errorElement : 'span',
                    errorClass : 'help-block',
                    focusInvalid : false,
                    rules : {
                        email : {
                            required : true
                        },
                        password : {
                            required : true
                        }
                    },
//                        messages : {
//                            email : {
//                                required : "Username is required."
//                            },
//                            password : {
//                                required : "Password is required."
//                            }
//                        },
                    highlight : function(element) {
                        $(element).closest('.form-group').addClass('has-error');
                    },
                    success : function(element) {
                        $(element).closest('.form-group').removeClass('has-error');
                        $(element).remove();
                    },
                    errorPlacement : function(error, element) {
                        element.parent('div').append(error);
                    },
                    submitHandler : function(form) {
                        $.post("auth/login",gApp.getFormParams($('#form-login')),function(data){
                            alert(data);
                        },"text");
                    }
                });

                $('#form-login input').keypress(function(event) {
                    if (event.which == 13) {
                        if ($('#form-login').validate().form()) {
                            $('#form-login').submit();
                        }
                        return false;
                    }
                });

                $('#login_commit').click(function(){
                    $('#form-login').submit();
                });
            }
            return {
                init : function() {
                    handleSubmit();
                }
            };

        }();


    </script>
@stop