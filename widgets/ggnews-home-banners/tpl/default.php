<div class="slider-area slider-style-three pt-10">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="slider-wrapper theme-default">
                    <!-- Slider Background  Image Start-->
                    <div id="slider" class="nivoSlider">
                        <?php foreach(@$instance['banner_left_loop'] as $slider): ?>
                            <a href="shop.html"> <img src="<?php echo @wp_get_attachment_image_url(@$slider['image'], 'full'); ?>" data-thumb="<?php echo @wp_get_attachment_image_url(@$slider['image'], 'full'); ?>" alt="" title=""/></a>
                        <?php endforeach; ?>
                        <?php unset($slider) ?>
                    </div>
                    <!-- Slider Background  Image Start-->
                </div>
            </div>
            <div class="col-md-3">
                 <!-- Single Banner Start -->
                 <?php foreach(@$instance['banner_right_loop'] as $slider): ?>
                     <div class="single-banner zoom mb-20">
                         <a href="#"><img src="<?php echo @wp_get_attachment_image_url(@$slider['image'], 'full'); ?>" alt="slider-banner"></a>
                     </div>
                 <?php endforeach; ?>
                 <?php unset($slider) ?>
                <!-- Single Banner End -->
            </div>
        </div>
    </div>
</div>
