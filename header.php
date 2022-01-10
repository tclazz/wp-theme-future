<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="tclazz wordpress theme,tclazz0-studio,tianshaojiao">
    <meta name="author" content="tclazz">
    <title>
        <?php if ( is_home() ) {
            bloginfo('name'); echo " - "; bloginfo('description');
        } elseif ( is_category() ) {
            single_cat_title(); echo " - "; bloginfo('name');
        } elseif (is_single() || is_page() ) {
            single_post_title();
        } elseif (is_search() ) {
            echo "搜索结果"; echo " - "; bloginfo('name');
        } elseif (is_404() ) {
            echo '页面未找到!';
        } else {
            wp_title('',true);
        } ?>
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcdn.net/ajax/libs/Swiper/7.4.0/swiper-bundle.min.css" rel="stylesheet">
    <!--idea暗黑主题使用-->
    <link href="https://cdn.bootcdn.net/ajax/libs/highlight.js/11.3.1/styles/base16/darcula.min.css" rel="stylesheet">
    <!--亮白主题使用-->
    <!--<link href="https://cdn.bootcdn.net/ajax/libs/highlight.js/11.3.1/styles/idea.min.css" rel="stylesheet">-->
    <!--默认暗黑-->
    <!--<link href="https://cdn.bootcdn.net/ajax/libs/highlight.js/11.3.1/styles/base16/default-dark.min.css" rel="stylesheet">-->
    <!--默认亮白-->
    <!--<link href="https://cdn.bootcdn.net/ajax/libs/highlight.js/11.3.1/styles/base16/default-light.min.css" rel="stylesheet">-->
    <link href="<?php bloginfo('template_url'); ?>/tclazz-framework/css/light-theme.css" rel="stylesheet"
          type="text/css">
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo get_bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" />
    <?php wp_head(); ?>
</head>
<?php wp_cache_flush(); ?>
<body>
<div id="page-loading" class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<nav id="webTopNavbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-lg">
        <a class="navbar-brand" href="#" style="outline: none">
            <img src="https://v5.bootcss.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt=""
                 width="30" height="24" class="d-inline-block align-text-top mr-3">TClazz
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://tclazz.com">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="http://tclazz.com">otherLink</a>
                </li>
            </ul>
            <form class="d-flex" style="height: 100%;min-width: 300px;">
                <div class="tclazz-input-group">
                    <input type="text" class="tclazzInput" placeholder="查找文章">
                    <button class="tclazzInputBtn">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</nav>
<div id="webContainer" class="webContainer">
    <div class="webContentWrapper">