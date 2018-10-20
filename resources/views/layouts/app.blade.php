<!-- 存放在 resources/views/layouts/app.blade.php -->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="博客内容">
    <meta name="author" content="ifanatic">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/wangEditor.min.css">

    <script src="/js/lib/jquery-1.10.2.min.js"></script>
    <script src="/bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]> <![endif]-->
    <script src="/bootstrap-3.3.7/js/html5shiv.min.js"></script>
    <script src="/bootstrap-3.3.7/js/respond.min.js"></script>
</head>
<body>

@include('layouts.header')

<div class="container">
    <div class="blog-header">
    </div>
    <div class="row">
        @yield('content')

        @include('layouts.sidebar')
    </div>
</div><!-- /.row -->


@include('layouts.footer')

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script type="text/javascript" src="/js/wangEditor.min.js"></script>
<script src="/js/ylaravel.js"></script>

</body>
</html>