<!-- New Products Banner Start -->
<div class="banner-bottom">
    <div class="banner">
        <div class="container">
            <div class="row">
                <?php foreach(@$instance['banner_bottom_loop'] as $slider): ?>
                    <div class="col-sm-6">
                        <div class="single-banner zoom">
                            <a href="<?php echo @$slider['href'] ?>"><img src="<?php echo @wp_get_attachment_image_url(@$slider['image'], 'full'); ?>" alt="slider-banner"></a>
                        </div>
                    </div>
              <?php endforeach; ?>
              <?php unset($policy) ?>
                <!-- Single Banner End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
</div>
<!-- New Products Banner End -->
