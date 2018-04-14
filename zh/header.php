<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<!--
__/\\\________/\\\_________________________________________________________________/\\\\\\\\\__/\\\_________________________________________________________________
 _\/\\\_____/\\\//_______________________________________________________________/\\\////////__\/\\\_________________________________________________________________
  _\/\\\__/\\\//______/\\\_________________/\\\\\\\\____________________________/\\\/___________\/\\\______________________________________________________/\\\\\\\\__
   _\/\\\\\\//\\\_____\///___/\\/\\\\\\____/\\\////\\\__/\\\\\\\\\\\____________/\\\_____________\/\\\_____________/\\\\\\\\___/\\\____/\\\__/\\/\\\\\\____/\\\////\\\_
    _\/\\\//_\//\\\_____/\\\_\/\\\////\\\__\//\\\\\\\\\_\///////\\\/____________\/\\\_____________\/\\\\\\\\\\____/\\\/////\\\_\/\\\___\/\\\_\/\\\////\\\__\//\\\\\\\\\_
     _\/\\\____\//\\\___\/\\\_\/\\\__\//\\\__\///////\\\______/\\\/______________\//\\\____________\/\\\/////\\\__/\\\\\\\\\\\__\/\\\___\/\\\_\/\\\__\//\\\__\///////\\\_
      _\/\\\_____\//\\\__\/\\\_\/\\\___\/\\\__/\\_____\\\____/\\\/_________________\///\\\__________\/\\\___\/\\\_\//\\///////___\/\\\___\/\\\_\/\\\___\/\\\__/\\_____\\\_
       _\/\\\______\//\\\_\/\\\_\/\\\___\/\\\_\//\\\\\\\\___/\\\\\\\\\\\______________\////\\\\\\\\\_\/\\\___\/\\\__\//\\\\\\\\\\_\//\\\\\\\\\__\/\\\___\/\\\_\//\\\\\\\\__
        _\///________\///__\///__\///____\///___\////////___\///////////__________________\/////////__\///____\///____\//////////___\/////////___\///____\///___\////////___


-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="<?php $this->options->description() ?>">
    <meta name="keyword" content="<?php $this->options->keywords() ?>">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="apple-mobile-web-app-title" content="KC BLOG"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-57x57-precomposed.png"/>
    <!-- iPhone 和 iTouch，默认 57x57 像素，必须有 -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114-precomposed.png"/>
    <!-- Retina iPhone 和 Retina iTouch，114x114 像素，可以没有，但推荐有 -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144-precomposed.png"/>
    <!-- Retina iPad，144x144 像素，可以没有，但推荐有 -->
    <title><?php $this->archiveTitle(array(
            'category' => _t('分类 %s 下的文章'),
            'search' => _t('包含关键字 %s 的文章'),
            'tag' => _t('标签 %s 下的文章'),
            'author' => _t('%s 发布的文章'),
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <link rel="canonical" href="https://kingzcheung.com/">

    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/style_light.min.css'); ?>">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a
            href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.
    </div>
    <![endif]-->
    <!-- ga & ba script hoook -->
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header("generator=&template="); ?>
</head>
<body data-rootdir="<?php echo $this->options->siteUrl() . '/usr/themes/zh/' ?>">
<header class="header is-fixed">
    <div class="nav-header">
        <a href="/" class="logo">KINGZCHEUNG</a>
        <button class="navbar-toggle" type="button"><i class="fa fa-ellipsis-v"></i></button>
        <nav class="nav">
            <ul class="navbar-nav">
                <li><a href="<?php $this->options->siteUrl(); ?>">home</a></li>

                <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
                <?php while ($category->next()): ?>
                    <li<?php if ($this->is('post')): ?><?php if ($this->category == $category->slug): ?> class="active"<?php endif; ?><?php else: ?><?php if ($this->is('category', $category->slug)): ?> class="active"<?php endif; ?><?php endif; ?>>
                        <a href="<?php $category->permalink(); ?>"
                           title="<?php $category->name(); ?>"><?php $category->name(); ?></a></li>
                <?php endwhile; ?>
                <li><a href="/project.html">PROJECTS</a></li>
            </ul>
        </nav>
    </div>
</header>

