@extends('layouts.app')

@section('title', '自媒体平台')

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/wangEditor.min.css">

    <script src="/js/lib/jquery-1.10.2.min.js"></script>
    <script src="/bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]><![endif]-->

    <script src="/bootstrap-3.3.7/js/html5shiv.min.js"></script>
    <script src="/bootstrap-3.3.7/js/respond.min.js"></script>

@section('content')
<div class="blog-masthead">
    <div class="container">
        <form action="/posts/search" method="GET">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a class="blog-nav-item " href="/articles">首页</a>
                </li>
                <li>
                    <a class="blog-nav-item" href="/articles/create">写文章</a>
                </li>
                <li>
                    <a class="blog-nav-item" href="/notices">通知</a>
                </li>
                <li>
                    <input name="query" type="text" value="" class="form-control" style="margin-top:10px"
                           placeholder="搜索词">
                </li>
                <li>
                    <button class="btn btn-default" style="margin-top:10px" type="submit">Go!</button>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <div>
                        <img src="#" alt="" class="img-rounded" style="border-radius:500px; height: 30px">
                        <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Kassandra Ankunding2 <span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/user/5">我的主页</a></li>
                            <li><a href="/user/5/setting">个人设置</a></li>
                            <li><a href="/logout">登出</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </form>
    </div>
</div>
<div class="container">

    <div class="blog-header">
    </div>

    <div class="row">


        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <div style="display:inline-flex">
                    <h2 class="blog-post-title">你好你好</h2>
                    <a style="margin: auto" href="/posts/62/edit">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                    <a style="margin: auto" href="/posts/62/delete">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
                </div>

                <p class="blog-post-meta">May 14, 2017 by <a href="#">Kassandra Ankunding2</a></p>

                <p>
                <p>你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好<img
                            src="http://127.0.0.1:8000/storage/72c76b674ec8793fcfd6555ff371bfbd/nxC9ozLfkORmoY92q9lPsejXchVvdNO2cwHiR2Jf.jpeg"
                            alt="63" style="max-width: 100%;">你好你好似懂非懂说</p>
                <p><br></p></p>
                <div>
                    <a href="/posts/62/zan" type="button" class="btn btn-primary btn-lg">赞</a>

                </div>
            </div>

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">评论</div>

                <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <h5>2017-05-28 10:15:08 by Kassandra Ankunding2</h5>
                        <div>
                            这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论
                        </div>
                    </li>
                </ul>
            </div>

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">发表评论</div>

                <!-- List group -->
                <ul class="list-group">
                    <form action="/posts/comment" method="post">
                        <input type="hidden" name="_token" value="4BfTBDF90Mjp8hdoie6QGDPJF2J5AgmpsC9ddFHD">
                        <input type="hidden" name="post_id" value="62"/>
                        <li class="list-group-item">
                            <textarea name="content" class="form-control" rows="10"></textarea>
                            <button class="btn btn-default" type="submit">提交</button>
                        </li>
                    </form>

                </ul>
            </div>

        </div><!-- /.blog-main -->


        <div id="sidebar" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <aside id="widget-welcome" class="widget panel panel-default">
                <div class="panel-heading">
                    欢迎！
                </div>
                <div class="panel-body">
                    <p>
                        欢迎来到简书网站
                    </p>
                    <p>
                        <strong><a href="/">简书网站</a></strong> 基于 Laravel5.4 构建
                    </p>
                    <div class="bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1494580268777"><a href="#"
                                                                                                           class="bds_more"
                                                                                                           data-cmd="more"></a><a
                                href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#"
                                                                                                   class="bds_renren"
                                                                                                   data-cmd="renren"
                                                                                                   title="分享到人人网"></a><a
                                href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a><a href="#"
                                                                                                    class="bds_weixin"
                                                                                                    data-cmd="weixin"
                                                                                                    title="分享到微信"></a><a
                                href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#"
                                                                                                   class="bds_tqq"
                                                                                                   data-cmd="tqq"
                                                                                                   title="分享到腾讯微博"></a><a
                                href="#" class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页"></a></div>
                    <script>window._bd_share_config = {
                            "common": {
                                "bdSnsKey": {"tsina": "120473611"},
                                "bdText": "",
                                "bdMini": "2",
                                "bdMiniList": false,
                                "bdPic": "",
                                "bdStyle": "0",
                                "bdSize": "24"
                            },
                            "share": {},
                            "image": {
                                "viewList": ["tsina", "renren", "douban", "weixin", "qzone", "tqq", "bdhome"],
                                "viewText": "分享到：",
                                "viewSize": "16"
                            },
                            "selectShare": {
                                "bdContainerClass": null,
                                "bdSelectMiniList": ["tsina", "renren", "douban", "weixin", "qzone", "tqq", "bdhome"]
                            }
                        };
                        with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
                </div>
            </aside>
            <aside id="widget-categories" class="widget panel panel-default">
                <div class="panel-heading">
                    专题
                </div>

                <ul class="category-root list-group">
                    <li class="list-group-item">
                        <a href="/topic/1">旅游
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/topic/2">轻松
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/topic/5">测试专题
                        </a>
                    </li>
                </ul>

            </aside>
        </div>
    </div>
</div><!-- /.row -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

@extends('layouts.js')