<?php
/*
Template Name:全部博客
*/
?>
<?php get_header();?>



<?php get_footer();?>
<script>
    $(document).ready(function () {
        /*$('.slick').slick({
            dots: true,//指示点
            autoplay:true,//自动播放
            autoplaySpeed:5000,//自动播放间隔
            centerMode:false,//中心模式
            //centerPadding:'120px',//中心模式左右内边距
            cssEase:'ease',//CSS3 动画
            fade:false,//淡入淡出
            infinite:true,//循环播放
            arrows:true,//左右箭头
            lazyLoad:'ondemand',//延迟加载，可选 ondemand 和 progressiv
            pauseOnHover:true,//鼠标悬停暂停自动播放
            slide:'div',//滑动元素查询
            slidesToShow:1,//幻灯片每屏显示个数
            slidesToScroll:1,//幻灯片每次滑动个数
            speed:300,//滑动时间
            swipe:false,//移动设备滑动事件
            touchMove:false,//触摸滑动
            touchThreshold:5,//滑动切换阈值，即滑动多少像素后切换
            useCSS:true,//使用 CSS3 过度
            vertical:false,//垂直方向
            customPaging: function(slider, i) {
                return '<a role="button" href="javascript:void(0)" class="indexSlideIndicator">'+(i+1)+'</a>';
            },
        }).slickGoTo(1);*/
        $('#page-loading').fadeOut();
    });
</script>
