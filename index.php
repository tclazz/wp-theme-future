<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
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
    <link href="<?php bloginfo('template_url'); ?>/tclazz-framework/css/light-theme.css" rel="stylesheet" type="text/css">
    <style type="text/css">
         body {
            background-color: var(--app-bg);
        }

        .content {
            width: 100%;
            min-height: 60vh;
            color: var(--bs-tea);
        }

        .webContainer {
            display: flex;
            width: 100%;
            min-height: 90vh;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
        }

        .contentWrapper {
            width: 100%;
            flex: 1;
        }

        .footerWrapper {
            width: 100%;
        }

        .tclazz-panel {
            min-height: 160px;
            background: linear-gradient(180deg, #f5f7f9 0, #fff);
            background-position: 100% 0;
            border: var(--border);
            box-shadow: var(--boxshadow);
            border-radius: 4px;
            padding: 16px;
            box-sizing: border-box;
            position: relative;
        }

        .bg-tclazz-light {
            background-color: rgba(255, 255, 255, 1);
        }

        .bg-tclazz-dark {
            background-color: rgba(33, 37, 41, 1);
        }
        .tclazz-nav-tabs{
            font-size: 0;
            margin-bottom: 5px;
        }
        .tclazz-nav-tabs .nav-item{
            display: inline-block;
            vertical-align: top;
            margin-right: 16px;
        }
        .tclazz-nav-item {
            box-sizing: border-box;
            border: 2px solid transparent;
            background: #f3f5f8;
            box-shadow: inset 8px 8px 20px 0 rgba(55, 99, 170, .11), inset -8px -8px 20px 0 #fff;
            border-radius: 6px;
            font-size: 14px;
            color: #3d485d;
            line-height: 35px;
            font-weight: 500;
            text-align: center;
            cursor: pointer;
            padding: 5px 12px;
            text-decoration: none;
        }

        .tclazz-nav-tabs .nav-item.show .tclazz-nav-item, .tclazz-nav-tabs .tclazz-nav-item.active {
            border-color: #fff #fff transparent;
            background: linear-gradient(180deg, #f4f6f8 0, #f5f7f9);
            padding-bottom: 15px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            color: #0052d9;
            cursor: default;
            box-shadow: none;
            position: relative;
            z-index: 2;
        }

        .tclazz-tab-pane {
            background: linear-gradient(180deg, #f5f7f9 0, #fff);
            border: 2px solid #fff;
            box-shadow: 8px 8px 20px 0 rgba(55, 99, 170, .1);
            border-radius: 6px;
            box-sizing: border-box;
            min-height: 220px;
            padding: 16px;
            display: inline-block;
            vertical-align: top;
        }
        .swiper {
            width: 100%;
            height: 200px;
        }
        .swiper-slide .tclazz-panel{
            margin-right: 15px;
            box-shadow: none;
        }
        /*.swiper-button-prev {
            right: 100%;
            margin-right: 20px !important;
        }
        .swiper-button-next {
            left: 100%;
            margin-left: 20px !important;
        }*/
        .tpm-swiper__btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 0;
            background-image: linear-gradient(
                    0deg,#fff,#f3f5f8);
            border: 2px solid #fff;
            box-shadow: 8px 8px 20px 0 rgba(55,99,170,.1), -8px -8px 20px 0 #fff;
        }
        .rank-wrapper{
            width: 100%;
            display: flex;
            position: relative;
            flex-direction: row;
            align-items: stretch;
            justify-content: flex-start;
        }
        .rank-panels{
            flex: 1;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            flex-direction: column;
            margin-right: 15px;
        }
        .rank-panels .rank-panel:not(:nth-child(1)){
            margin-top: 10px;
        }
        .rank-panel{
            background: linear-gradient(180deg, #f5f7f9 0, #fff);
            border: 2px solid #fff;
            box-shadow: 8px 8px 20px 0 rgba(55, 99, 170, .1);
            border-radius: 6px;
            box-sizing: border-box;
            min-height: 40px;
            padding: 8px;
            vertical-align: top;
            width: 100%;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-direction: row;
            cursor: pointer;
        }
        .rank-panel-order{
            font-size: 16px;
            line-height: 16px;
            font-weight: 700;
            margin-right: 10px;
            color: #0d6efd;
        }
        .rank-panel-title{
            width: 100%;
            text-decoration: none;
            font-size: 14px;
            line-height: 14px;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            color: rgba(0,0,0,.65);
        }
        .rank-panel:hover .rank-panel-title{
            color: #0d6efd;
        }
        .rank-panel-desc{
            color: rgba(0,0,0,.45);
            font-size: 12px;
            line-height: 12px;
        }
        .rank-links{
            flex: 1;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            flex-direction: column;
        }
        .rank-links :not(:nth-child(1)){
            margin-top: 10px;
        }
        .rank-link{
            width: 100%;
            text-decoration: none;
            font-size: 14px;
            line-height: 14px;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            color: rgba(0,0,0,.65);
            cursor: pointer;
        }
        .rank-link:hover{
            color: #0d6efd;
        }
        .rank-link-order{
            margin-right: 10px;
        }
    </style>
</head>
<body style="padding-top: 65px">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="box-shadow: 8px 8px 20px 0 rgba(55, 99, 170, .1);">
    <div class="container-lg">
        <a class="navbar-brand" href="#">
            <img src="https://v5.bootcss.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt=""
                 width="30" height="24" class="d-inline-block align-text-top mr-3">TClazz
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://tclazz.com">home</a>
                </li>
            </ul>
            <form class="d-flex" style="height: 100%;min-width: 300px;">
                <input class="form-control me-2" type="search" placeholder="search blogs" aria-label="Search">
                <button class="btn btn-outline-warning" type="button" style="white-space: nowrap">search</button>
            </form>
        </div>
    </div>
</nav>
<div class="webContainer">
    <div class="contentWrapper">
        <div class="container-lg">
            <div class="row row-cols-lg-1 row-cols-md-1 row-cols-sm-1 row-cols-1 g-3">
            <div class="col">
                    <pre>
                        <code class="lang-java">
                            /**
                              * @author tclazz
                              * @version 1.0
                              * @apiNote 代码高亮测试
                              * @since 2022/1/7
                            */
                            public static void main (String []args){
                                System.out.println("Hello World！");
                            }
                        </code>
                    </pre>
                </div>
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="rank-wrapper">
                        <div class="rank-panels">
                            <a class="rank-panel">
                                <i class="rank-panel-order">01</i>
                                <div class="rank-panel-metas">
                                    <span class="rank-panel-title">Link Title</span>
                                    <div class="rank-panel-desc">
                                        <span>this is link desc</span>
                                    </div>
                                </div>
                            </a>
                            <a class="rank-panel">
                                <i class="rank-panel-order">02</i>
                                <div class="rank-panel-metas">
                                    <span class="rank-panel-title">Link Title</span>
                                    <div class="rank-panel-desc">
                                        <span>this is link desc</span>
                                    </div>
                                </div>
                            </a>
                            <a class="rank-panel">
                                <i class="rank-panel-order">03</i>
                                <div class="rank-panel-metas">
                                    <span class="rank-panel-title">Link Title</span>
                                    <div class="rank-panel-desc">
                                        <span>this is link desc</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="rank-links">
                            <a class="rank-link">
                                <span class="rank-link-order">4</span>
                                This is Link Text...
                            </a>
                            <a class="rank-link">
                                <span class="rank-link-order">5</span>
                                This is Link Text...
                            </a>
                            <a class="rank-link">
                                <span class="rank-link-order">6</span>
                                This is Link Text...
                            </a>
                            <a class="rank-link">
                                <span class="rank-link-order">7</span>
                                This is Link Text...
                            </a>
                            <a class="rank-link">
                                <span class="rank-link-order">8</span>
                                This is Link Text...
                            </a>
                            <a class="rank-link">
                                <span class="rank-link-order">9</span>
                                This is Link Text...
                            </a>
                            <a class="rank-link">
                                <span class="rank-link-order">10</span>
                                This is Link Text...
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="tclazz-panel">
                        <span>panel</span>
                    </div>
                </div>
                <div class="col">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tclazz-panel">
                                    Slide 1
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tclazz-panel">
                                    Slide 2
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tclazz-panel">
                                    Slide 3
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tclazz-panel">
                                    Slide 4
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tclazz-panel">
                                    Slide 5
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tclazz-panel">
                                    Slide 6
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tclazz-panel">
                                    Slide 7
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tclazz-panel">
                                    Slide 8
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tclazz-panel">
                                    Slide 9
                                </div>
                            </div>
                        </div>
                        <!-- 如果需要导航按钮 -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <div class="col">
                    <ul class="nav tclazz-nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0)" class="tclazz-nav-item active" data-bs-toggle="tab" data-bs-target="#tab1"
                               role="tab" aria-controls="home" aria-selected="true">标签1</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0)" class="tclazz-nav-item" data-bs-toggle="tab" data-bs-target="#tab2"
                               role="tab" aria-controls="profile" aria-selected="false">标签2</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0)" class="tclazz-nav-item" data-bs-toggle="tab" data-bs-target="#tab3"
                               role="tab" aria-controls="messages" aria-selected="false">标签3</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0)" class="tclazz-nav-item" data-bs-toggle="tab" data-bs-target="#tab4"
                               role="tab" aria-controls="settings" aria-selected="false">标签4</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tclazz-tab-pane tab-pane active" id="tab1" role="tabpanel"
                             aria-labelledby="home-tab">内容1
                        </div>
                        <div class="tclazz-tab-pane tab-pane" id="tab2" role="tabpanel"
                             aria-labelledby="profile-tab">内容2
                        </div>
                        <div class="tclazz-tab-pane tab-pane" id="tab3" role="tabpanel"
                             aria-labelledby="messages-tab">内容3
                        </div>
                        <div class="tclazz-tab-pane tab-pane" id="tab4" role="tabpanel"
                             aria-labelledby="settings-tab">内容4
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!--panel demo-->
                    <div class="tclazz-panel">
                        <span>panel</span>
                    </div>
                </div>
                <div class="col">
                    <div class="content text-danger text-center" style="display: flex;
                        flex-direction: row;align-items: center;justify-content: center">
                        this site is building...
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footerWrapper">
        <div class="container-fluid text-center">
            © 2018-2021 CoreCmd All Rights Reserved.
            <a href="http://www.miitbeian.gov.cn" class="reborn-footer-url" target="_blank">京ICP备18063315号-2</a>
            <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=52038202001416"
               class="reborn-footer-url" target="_blank">贵公网安备 52038202001416号</a>
        </div>
    </div>
</div>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/Swiper/7.4.0/swiper-bundle.min.js"></script>
<script>
    $(document).ready(function () {
        initBootTab();
        initSlider();
        initHighlightjs();
    });

    function initHighlightjs() {
        hljs.initHighlightingOnLoad();
    }

    function initBootTab() {
        var firstTabEl = document.querySelector('#myTab li:last-child a')
        var firstTab = new bootstrap.Tab(firstTabEl)
        firstTab.show()
    }

    function initSlider() {
        var mySwiper = new Swiper('.swiper', {
            direction: 'horizontal', // 垂直切换选项
            loop: true, // 循环模式选项
            autoplay:false,
            // 如果需要前进后退按钮
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView : 3,
            slidesPerGroup : 3,
        })
    }
</script>
</body>
</html>
