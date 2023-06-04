<?php get_header() ?>
<!-- Breadcrumb Start -->
<?php ggnews_breadcrumbs([
    [
        "title" => single_cat_title("", false)
    ]
]) ?>
<!-- Breadcrumb End -->
<!-- Blog Area Start -->
<div class="blog-area off-white-bg pb-50">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-xs-12">
                <div class="section-title text-center ptb-50">
                    <h3 class="section-info"><?php echo single_cat_title() ?></h3>
                </div>
            </div>
            <!-- Section Title End -->
        </div>
        <!-- Row End -->
        <div class="row">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <div class="col-md-4 col-sm-6">
                <!-- Single Blog Start -->
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="blog-image"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-content-upper">
                            <h6 class="blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h6>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
                <!-- Single Blog End -->
            </div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
        </div>
        <!-- Row End -->
        <div class="row">
            <div class="col-sm-12">
                <?php ggnews_pagination($wp_query->max_num_pages); ?>
                <!-- End of .blog-pagination -->
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Blog Area End -->
<?php get_footer() ?>
