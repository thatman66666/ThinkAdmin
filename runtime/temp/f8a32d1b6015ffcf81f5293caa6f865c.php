<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"D:\WebRoot\git\Think.Admin.git\trunk/application/admin\view\login.index.html";i:1486969784;s:77:"D:\WebRoot\git\Think.Admin.git\trunk/application/extra\view\admin.header.html";i:1486969784;}*/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="renderer" content="webkit"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo (isset($ptitle) && ($ptitle !== '')?$ptitle:''); ?></title>
        <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="__STATIC__/theme/default/css/console.css">
        <link rel="stylesheet" href="__STATIC__/theme/default/css/animate.css">
        
<link rel="stylesheet" href="__STATIC__/theme/default/css/login.css">

        <script src="//cdn.bootcss.com/require.js/2.2.0/require.min.js"></script>
        <script src="__STATIC__/admin/app.js"></script>
    </head>
    
<body>
<div class="login-container" style="height:100%">

    <div class="clouds clouds-footer"></div>
    <div class="clouds"></div>
    <div class="clouds clouds-fast"></div>

    <div class="header">
        <span>欢迎登录后台管理界面平台</span>
        <ul>
            <li><a href="/">回首页</a></li>
            <li>
                <a href="javascript:void(0)" target="_blank">
                    <b style="color:#fff">帮助</b>
                </a>
            </li>
            <li>
                <a href="http://sw.bos.baidu.com/sw-search-sp/software/4bcf5e4f1835b/ChromeStandalone_54.0.2840.99_Setup.exe"
                   target="_blank">
                    <b style="color:#fff">推荐谷歌浏览器</b>
                </a>
            </li>
            <li><a href="http://www.cuci.cc">楚才官网</a></li>
        </ul>
    </div>

    <div class="container" style="top:50%;margin-top:-300px">

        <form onsubmit="return false;" data-auto="true" method="post" class="content layui-form">
            <div class="people">
                <div class="tou"></div>
                <div id="left-hander" class="initial_left_hand transition"></div>
                <div id="right-hander" class="initial_right_hand transition"></div>
            </div>
            <ul>
                <li>
                    <input required="required"
                           pattern="^\S{4,}$"
                           title="请输入4位及以上的字符"
                           type="text"
                           name="username"
                           class="login-input username"
                           autocomplete="off"
                           autofocus="autofocus"
                           placeholder="请输入用户名/手机号码"/>
                </li>
                <li>
                    <input required="required"
                           pattern="^\S{4,}$"
                           title="请输入4位及以上的字符"
                           type="password"
                           name="password"
                           class="login-input password"
                           autocomplete="off" placeholder="请输入密码"/>
                </li>
                <li class="text-center">
                    <button type="submit" class="layui-btn layui-btn">立 即 登 入</button>
                    <a style="position:absolute;display:block;right:0" href="javascript:void(0)">忘记密码？</a>
                </li>
            </ul>
        </form>
    </div>
    <div class="footer"><?php echo sysconf('site_company'); ?> &copy; <?php echo date('Y'); ?></div>
</div>
<script>
    require(['jquery'], function ($) {
        $('[name="password"]').on('focus', function () {
            $('#left-hander').removeClass('initial_left_hand').addClass('left_hand');
            $('#right-hander').removeClass('initial_right_hand').addClass('right_hand')
        }).on('blur', function () {
            $('#left-hander').addClass('initial_left_hand').removeClass('left_hand');
            $('#right-hander').addClass('initial_right_hand').removeClass('right_hand')
        });
    });
</script>
</body>

</html>