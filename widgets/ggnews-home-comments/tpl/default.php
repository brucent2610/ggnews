<div class="border-default main-testmonial universal-padding">
        <div class="group-title">
            <h2><?php echo @$instance['title'] ?></h2>
        </div>
        <!-- Blog Comments Activation Start -->
        <div class="testimonial__container text-center">
            <!-- Testmonial Text Start -->
            <div class="testimonial__text__slide testext_active">
                <?php foreach (@$instance['supplier_loop'] as $key => $supplier) { ?>
                    <div class="single-comments text-center">
                        <p class="desc"><?php echo @$supplier['description'] ?></p>
                        <p class="email"><strong><?php echo @$supplier['company'] ?></strong></p>
                        <p><a href="<?php echo @$supplier['href'] ?>"><?php echo @$supplier['title'] ?></a></p>
                    </div>
                <?php } ?>
            </div>
            <!-- Testmonial Text End -->
            <!-- Testmonial Image Start -->
            <div class="tes__img__slide thumb_active">
                <?php foreach (@$instance['supplier_loop'] as $key => $supplier) { ?>
                    <div class="testimonial__img">
                        <span><img src="<?php echo @wp_get_attachment_image_url(@$supplier['image'], 'full'); ?>" alt="testimonial image"></span>
                    </div>
                <?php } ?>
            </div>
            <!-- Testmonial Image End -->
        </div>
        <!-- Blog Comments Activation End -->
    </div>
</div>
