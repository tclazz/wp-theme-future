<?php get_header(); ?>
<div class="indexBanner">
    <div class="bannerContent">
        <h4 class="welcomeText" data-text="Welcome to TClazz">Welcome to TClazz</h4>
        <div class="welcomeMetas">
            <!-- <a href="#webContainer" class="btn btn-primary">开始阅读</a>-->
        </div>
    </div>
    <div class="scrollToWrapper">

        <i class="bi bi-chevron-double-down" style="cursor: pointer"></i>
    </div>
</div>
<div class="container-lg">
    <div class="row row-cols-lg-1 row-cols-md-1 row-cols-sm-1 row-cols-1 g-3" style="margin-top: 3px">
        <div class="col">
            <div class="tclazz-input-group">
                <input type="text" class="tclazzInput" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="tclazzInputBtn">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
        <div class="3">
            <div class="customTag">
                <i class="pls-nav-tag">热门</i>
            </div>
        </div>
        <div class="col">
            <div id="calendarChart" style="width: 100%;height: 220px"></div>
        </div>
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
<?php get_footer(); ?>
<script>
    let mySwipper = {};
    let myCalendarChart = undefined;
    $(document).ready(function () {
        initSlider();
        initWindowWithListener();
        initCalendarChart();
    });

    function initWindowWithListener() {
        $(window).resize(function () {
            if (mySwipper) {
                mySwipper.destroy(true, true);
            }
            initSlider();
            resizeCalendarChart();
        });
    }

    function initSlider() {
        let windowWidth = $(window).width();
        let slideCount = 3;
        if (windowWidth < 768) {
            slideCount = 1;
        } else if (windowWidth === 768) {
            slideCount = 2;
        } else if (windowWidth > 768 && windowWidth < 1344) {
            slideCount = 3;
        } else {
            slideCount = 4;
        }
        mySwipper = new Swiper('.swiper', {
            direction: 'horizontal', // 垂直切换选项
            loop: true, // 循环模式选项
            autoplay: true,
            // 如果需要前进后退按钮
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: slideCount,
            //间距
            spaceBetween: 15,
        });

    }

    function resizeCalendarChart() {
        if (myCalendarChart) {
            myCalendarChart.resize();
        } else {
            initCalendarChart();
        }
    }

    function initCalendarChart() {
        var chartDom = document.getElementById('calendarChart');
        myCalendarChart = echarts.init(chartDom);
        var option;

        function getVirtulData(year) {
            year = year || '2022';
            var date = +echarts.number.parseDate(year + '-01-01');
            var end = +echarts.number.parseDate(year + '-12-31');
            var dayTime = 3600 * 24 * 1000;
            var data = [];
            for (var time = date; time < end; time += dayTime) {
                data.push([
                    echarts.format.formatTime('yyyy-MM-dd', time),
                    Math.floor(Math.random() * 40)
                ]);
            }

            return data;
        }

        option = {
            title: {
                top: 0,
                left: 'center',
                text: 'Posts Daily Count'
            },
            tooltip: {},
            visualMap: {
                type: "piecewise",
                show: false,
                min: 0,
                max: 10000,
                //设置自定义范围区域的颜色！！！
                pieces: [
                    // 不指定 max，表示 max 为无限大（Infinity）。
                    {gte: 30, color: '#451981'},
                    {gte: 20, lte: 29, color: '#9e6cd8'},
                    {gte: 10, lte: 19, color: '#ddb5ff'},
                    {lte: 9, color: '#f7ebff'}],
            },
            calendar: {
                top: 60,
                bottom: 10,
                left: 35,
                right: 10,
                cellSize: 20,
                range: ['2022'],
                //orient:'vertical',
                splitLine: {
                    show: false
                },
                itemStyle: {
                    color: '#ededed',
                    borderColor: '#ffffff',
                },
                dayLabel: {
                    nameMap: ['', '一', '', '三', '', '五', '']
                },
                monthLabel: {
                    align: 'left',
                    position: 'start',
                    nameMap: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
                },
                yearLabel: {
                    show: false
                }
            },
            series: {
                type: 'heatmap',
                coordinateSystem: 'calendar',
                data: getVirtulData('2022')
            }
        };
        option && myCalendarChart.setOption(option);
    }
</script>
