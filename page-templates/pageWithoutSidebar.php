<?php
/*
Template Name:无边栏页面
*/
?>
<?php get_header();?>
<?php
$page_id = get_the_ID();
$pageContent = get_post($page_id)->post_content;
$thumbnail_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($page_id), 'full');
$page_thumbnail = $thumbnail_image_url[0];
?>
<div class="container webContentContainer" style="min-height: 800px">
    <div class="row">
        <div id="webContent" class="col-lg-12 col-md-12 col-sm-12 mb-3">
            <div class="col-lg-12" style="min-height: 800px">
                <?php echo $pageContent;?>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>
<script>
    $(document).ready(function () {
        $('#page-loading').fadeOut();
    });
</script>

