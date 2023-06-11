<div class="wrapper">
    <div class="slide-container">
        <?php foreach(@$instance['banner_left_loop'] as $slider): ?>
            <div class="slide-item">
                <img src="<?php echo @wp_get_attachment_image_url(@$slider['image'], 'full'); ?>" alt="slide1" />
            </div>
        <?php endforeach; ?>
        <?php unset($slider) ?>
    </div>
</div>