
@extends('layouts.app')

@section('title', '创建文章')

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
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a class="blog-nav-item " href="/posts">首页</a>
                </li>
                <li>
                    <a class="blog-nav-item" href="/posts/create">写文章</a>
                </li>
                <li>
                    <a class="blog-nav-item" href="/notices">通知</a>
                </li>
                <li>
                    <input name="query" type="text" value="" class="form-control" style="margin-top:10px" placeholder="搜索词">
                </li>
                <li>
                    <button class="btn btn-default" style="margin-top:10px" type="submit">Go!</button>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <div>
                        <img src="/storage/9f0b0809fd136c389c20f949baae3957/iBkvipBCiX6cHitZSdTaXydpen5PBiul7yYCc88O.jpeg" alt="" class="img-rounded" style="border-radius:500px; height: 30px">
                        <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kassandra Ankunding2  <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/user/5">我的主页</a></li>
                            <li><a href="/user/5/setting">个人设置</a></li>
                            <li><a href="/logout">登出</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">

        <div class="blog-header">
        </div>

        <div class="row">

            <div class="col-sm-8 blog-main">
                <form action="/posts" method="POST">
                    <input type="hidden" name="_token" value="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy">
                    <div class="form-group">
                        <label>标题</label>
                        <input name="title" type="text" class="form-control" placeholder="这里是标题">
                    </div>
                    <div class="form-group">
                        <label>内容</label>
                        <textarea id="content"  style="height:400px;max-height:500px;" name="content" class="form-control" placeholder="这里是内容"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">提交</button>
                </form>
                <br>

            </div><!-- /.blog-main -->



            <div id="sidebar" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">


                <aside id="widget-welcome" class="widget panel panel-default">
                    <div class="panel-heading">
                        欢迎！
                    </div>
                    <div class="panel-body">
                        <p>
                            欢迎来到自媒体网站
                        </p>
                        <p>
                            <strong><a href="/">自媒体网站</a></strong> 基于 Laravel5.7 构建
                        </p>
                        <div class="bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1494580268777"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页"></a></div>
                        <script>window._bd_share_config={"common":{"bdSnsKey":{"tsina":"120473611"},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{},"image":{"viewList":["tsina","renren","douban","weixin","qzone","tqq","bdhome"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["tsina","renren","douban","weixin","qzone","tqq","bdhome"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
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
        </div>    </div><!-- /.row -->
    </div><!-- /.container -->

@extends('layouts.footer')

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
@extends('layouts.js')

