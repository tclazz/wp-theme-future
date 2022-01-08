<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
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
    <style>
        .welcomeText {
            /*是否转大写*/
            /*text-transform: uppercase;*/
            font-size: calc(8vmin + 8 * (100vw - 400px) / 400);
            cursor: pointer;
            position: relative;
            z-index: 1000;
            text-align: center;
            color: #ffffff;
            width: 100%;
        }

        .welcomeText:before {
            left: -1px;
            text-shadow: 5px 0 rgba(255, 0, 0, .7);
            animation: welcomeText-loop-1 .8s ease-in-out infinite alternate-reverse;
        }

        .welcomeText:after {
            left: 1px;
            text-shadow: -5px 0 rgba(0, 0, 255, .7);
            animation: welcomeText-loop-2 1s ease-in-out infinite alternate-reverse;
        }

        .welcomeText:after, .welcomeText:before {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            clip: rect(0, 0, 0, 0);
        }

        @-webkit-keyframes welcomeText-loop-1 {
            0% {
                clip: rect(36px, 9999px, 9px, 0)
            }

            25% {
                clip: rect(25px, 9999px, 99px, 0)
            }

            50% {
                clip: rect(50px, 9999px, 102px, 0)
            }

            75% {
                clip: rect(20px, 9999px, 92px, 0)
            }

            to {
                clip: rect(100px, 9999px, 98px, 0)
            }
        }

        @keyframes welcomeText-loop-1 {
            0% {
                clip: rect(36px, 9999px, 9px, 0)
            }

            25% {
                clip: rect(25px, 9999px, 99px, 0)
            }

            50% {
                clip: rect(50px, 9999px, 102px, 0)
            }

            75% {
                clip: rect(20px, 9999px, 92px, 0)
            }

            to {
                clip: rect(100px, 9999px, 98px, 0)
            }
        }

        @-webkit-keyframes welcomeText-loop-2 {
            0% {
                top: -1px;
                left: 1px;
                clip: rect(65px, 9999px, 119px, 0)
            }

            25% {
                top: -8px;
                left: 2px;
                clip: rect(79px, 9999px, 19px, 0)
            }

            50% {
                top: -3px;
                left: 2px;
                clip: rect(68px, 9999px, 11px, 0)
            }

            75% {
                top: 0;
                left: -2px;
                clip: rect(95px, 9999px, 53px, 0)
            }

            to {
                top: -1px;
                left: -4px;
                clip: rect(31px, 9999px, 149px, 0)
            }
        }

        @keyframes welcomeText-loop-2 {
            0% {
                top: -1px;
                left: 1px;
                clip: rect(65px, 9999px, 119px, 0)
            }

            25% {
                top: -8px;
                left: 2px;
                clip: rect(79px, 9999px, 19px, 0)
            }

            50% {
                top: -3px;
                left: 2px;
                clip: rect(68px, 9999px, 11px, 0)
            }

            75% {
                top: 0;
                left: -2px;
                clip: rect(95px, 9999px, 53px, 0)
            }

            to {
                top: -1px;
                left: -4px;
                clip: rect(31px, 9999px, 149px, 0)
            }
        }

        .indexBanner {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
            background-image: url(https://blogzine.webestica.com/assets/images/blog/16by9/04.jpg);
            background-size: cover;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            position: relative;
        }
        .indexBanner:before {
            /*background: url(https://cdn.jsdelivr.net/gh/lavender816/CDN@1.8/img/dot.jpg);*/
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -4;
            background-attachment: fixed;
        }
        #webTopNavbar .nav-link{
            font-weight: 700;
            letter-spacing: .0625rem;
        }
    </style>
</head>
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
                <input class="form-control me-2" type="search" placeholder="search blogs" aria-label="Search">
                <button class="btn btn-outline-warning" type="button" style="white-space: nowrap">search</button>
            </form>
        </div>
    </div>
</nav>
<div class="indexBanner">
    <div class="bannerContent">
        <h4 class="welcomeText" data-text="Welcome to TClazz">Welcome to TClazz</h4>
        <div class="welcomeMetas">
           <!-- <a href="#webContainer" class="btn btn-primary">开始阅读</a>-->
        </div>
    </div>
</div>
<div id="webContainer" class="webContainer">
    <div class="webContentWrapper">
        <div class="container-lg">
            <div class="row row-cols-lg-1 row-cols-md-1 row-cols-sm-1 row-cols-1 g-3">
                <div class="col">
                    <div class="swiperContainer">
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
                        </div>
                        <!-- 如果需要导航按钮 -->
                        <div class="swiper-button-prev"><i class="bi bi-chevron-left"></i></div>
                        <div class="swiper-button-next"><i class="bi bi-chevron-right"></i></div>
                    </div>
                </div>
                <div class="col">
                    <ul class="nav tclazz-nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0)" class="tclazz-nav-item active" data-bs-toggle="tab"
                               data-bs-target="#tab1"
                               role="tab" aria-controls="home" aria-selected="true">Docker</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0)" class="tclazz-nav-item" data-bs-toggle="tab"
                               data-bs-target="#tab2"
                               role="tab" aria-controls="profile" aria-selected="false">前端开发</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0)" class="tclazz-nav-item" data-bs-toggle="tab"
                               data-bs-target="#tab3"
                               role="tab" aria-controls="messages" aria-selected="false">后端开发</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0)" class="tclazz-nav-item" data-bs-toggle="tab"
                               data-bs-target="#tab4"
                               role="tab" aria-controls="settings" aria-selected="false">数据库</a>
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
                <div class="col">
                    <!--panel demo-->
                    <div class="tclazz-panel">
                        <span>panel</span>
                    </div>
                </div>
                <div class="col">
                    <div class="text-danger text-center" style="display: flex;
                        flex-direction: row;align-items: center;justify-content: center">
                        this site is building...
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="webFooter container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer-inner">
                        <div class="row g-2">
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="footer-main">
                                    <div class="userLinks">
                                        <a class="footer-link-item" href="http://tclazz.com"><span
                                                    style="font-size: 16px;color: #0d6efd;font-weight: 700">TClazz(T码)</span></a>
                                        <a class="footer-link-item" href="http://www.tianshaojiao.com" target="_blank">个人博客</a>
                                        <a class="footer-link-item" href="https://blog.csdn.net/MasterAjoe"
                                           target="_blank">CSDN博客</a>
                                        <a class="footer-link-item" href="https://www.baidu.com" target="_blank">百度</a>
                                        <a class="footer-link-item" href="https://console.qingcloud.com"
                                           target="_blank">青云·云服务提供商</a>
                                        <a class="footer-link-item"
                                           href="http://www.tianshaojiao.com:2020/wenyi/i/love/you" target="_blank">可爱的女朋友</a>
                                    </div>
                                    <span class="normal-text">Copyright © 2018-2022 CoreCmd. All Rights Reserved. T码版权所有</span><br>
                                    <div class="copyRights">
                                        <span style="margin-right: 15px">本主题作者:（TClazz） T码 成都市高新区个人开发者</span>
                                        <a href="http://www.miitbeian.gov.cn" class="footer-link-item" target="_blank">京ICP备18063315号-2</a>
                                        <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=52038202001416"
                                           class="footer-link-item" target="_blank">贵公网安备 52038202001416号</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="footer-extra">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/Swiper/7.4.0/swiper-bundle.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>
<script>
    $(document).ready(function () {
        //取消加载
        $('#page-loading').fadeOut();
        initBootTab();
        initSlider();
        initHighlightjs();
        initWebScrollListener();
    });
    function initWebScrollListener() {
        let $topNavbar = $('#webTopNavbar');
        $(window).scroll(function(event){
            let winPos = $(window).scrollTop();
            if (winPos > 50){
                $topNavbar.addClass('bg-dark');
            } else {
                $topNavbar.removeClass('bg-dark');
            }
        });
    }
    function initHighlightjs() {
        hljs.initHighlightingOnLoad();
    }

    function initBootTab() {
        var firstTabEl = document.querySelector('#myTab li:last-child a');
        var firstTab = new bootstrap.Tab(firstTabEl);
        firstTab.show()
    }

    function initSlider() {
        var mySwiper = new Swiper('.swiper', {
            direction: 'horizontal', // 垂直切换选项
            loop: true, // 循环模式选项
            autoplay: false,
            // 如果需要前进后退按钮
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 4,
            slidesPerGroup: 4,
            //间距
            spaceBetween: 15,
        })
    }
</script>
</body>
</html>
