<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>关于我们</title>
    <link rel="stylesheet" href="/Card-system/Public/Home/css/bootstrap.css"/>
    <link rel="stylesheet" href="/Card-system/Public/Home/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/Card-system/Public/Home/css/Style.css"/>
</head>
<body>
<header class="header">
    <nav class="navbar navbar-default" role="navigation" style="background: white;height: 80px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="container">
                    <div class="raw">
                        <div class="col-md-4">
                            <img class="logo" src="/Card-system/Public/Home/images/one_card2.jpg">
                            <font class="word" color="#46b8da">校园一卡通</font>
                            <button type="button" style="margin-top:20px; " class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                                <span class="sr-only">切换导航</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="col-md-8">
                            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                                <ul class="nav navbar-nav navbar-right" style="margin-top: 20px;">
                                    <li class="ti"><a href="<?php echo U('Index/index');?>">首页</a></li><!--li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li-->
                                    <li class="ti"><a href="<?php echo U('Index/news');?>">新闻动态</a></li>
                                    <li class="ti"><a href="<?php echo U('Index/service');?>">服务中心</a></li>
                                    <li class="ti"><a href="<?php echo U('Index/recruit');?>">招贤纳士</a></li>
                                    <li class="ti"><a href="<?php echo U('Index/aboutUs');?>">关于我们</a></li>
                                    <li class="ti"><a href="<?php echo U('Home/Public/login');?>">学生登录</a></li>
                                    <li class="ti"><a href="<?php echo U('Admin/Public/login');?>">管理员登录</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<footer class="footer">
    <hr style="margin: 0 0 0 0; height: 1px; width: auto;background: #46b8da;"/>
    <div class="container">
        <div class="raw">
            <br/><br/>
            <div class="col-md-5 col-xs-5" style="height: auto;">
                <div><font style="font-size:20px; color: white;">Content Us</font></div>
                <p></p>
                <p>地址:重庆市沙坪坝区大学城</p>
                <p>电话:123456789</p>
                <p>传真:(123)456-789</p>
                <p>邮箱:QinHsiu@qq.com</p>
            </div>
            <div class="col-md-2 col-xs-2"></div>
            <div class="col-md-5 col-xs-5">
                <div ><font style="font-size:20px; color: white;">Other Links</font></div>
                <p></p>
                <p><a href="<?php echo U('Index/news');?>">新闻动态</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="<?php echo U('Index/service');?>">服务中心</a></p>
                <p><a href="<?php echo U('Index/recruit');?>">招贤纳士</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="<?php echo U('Index/aboutUs');?>">关于我们</a> </p>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>