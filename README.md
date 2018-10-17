# media-laravel
前后端结合的项目，主要是文章发布相关的平台。

### laravel安装步骤
- 参考：https://laravelacademy.org/post/9528.html
- composer global require "laravel/installer"
- 配置环境变量：C:\Users\king\AppData\Roaming\Composer\vendor\bin
- laravel new media
- composer update 
- php artisan migrate:install
- 创建models 文件 php artisan make:model Models/Test
- 创建控制器  php artisan make:controller ArticleController
- github 上搜组件：bootstrap，respond,html5shiv

### apache，nginx中页面404
Apache
- Laravel 框架通过 public/.htaccess 文件来让网址不需要 index.php。如果你的服务器是使用 Apache，请确认是否有开启 mod_rewrite 模块。
如果 Laravel 附带的 .htaccess 文件在 Apache 中无法使用的话，请尝试下方的做法：


    Options +FollowSymLinks
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]

Nginx

- 若你使用了 Nginx，则可以在网站设置中增加以下设置：

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
    
### layouts布局
- 原则是先进行首页挖空处理，然后再一一对应，进行布局操作，详情见app.blade.php

### migrate 数据表
- 生成迁移文件文章表 php artisan make:migration create_articles_table
- php artisan migrate 按照时间生成迁移文件
  - 会有错误提示,字符串长度限制
  - AppServiceProvider中添加默认字段  Schema::defaultStringLength(191);
  - tinker的交互界面，存储完数据，需要设置市区 Asia/Shangai
  - 数据填充 faker -
  - 进入 tinker界面 factory(App\Models\Article::class,10)->make();打印界面上， ... create() 创建
   