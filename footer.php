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
<script src="https://cdn.bootcdn.net/ajax/libs/echarts/4.9.0-rc.1/echarts.min.js"></script>
<script>
    $(document).ready(function () {
        //取消加载
        $('#page-loading').fadeOut();
        initBootTab();
        initHighlightjs();
        initWebScrollListener();
    });
    function initWebScrollListener() {
        let $topNavbar = $('#webTopNavbar');
        $(window).scroll(function(event){
            let winPos = $(window).scrollTop();
            if (winPos > 50){
                $topNavbar.removeClass('navbar-dark');
                $topNavbar.addClass('bg-light navbar-light');
            } else {
                $topNavbar.removeClass('bg-light');
                $topNavbar.removeClass('navbar-light');
                $topNavbar.addClass('navbar-dark');
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
</script>
</body>
</html>
