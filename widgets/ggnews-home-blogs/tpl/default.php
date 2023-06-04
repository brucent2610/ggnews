<?php
$processed_query = array(
    'post_type' => 'post',
    'posts_per_page' => 6
);
if(!empty($instance['blog_ids']))
{
    $processed_query['post__in'] = explode(',', $instance['blog_ids']);
}
$query_result = new WP_Query( $processed_query );
?>
<div class="border-default universal-padding home-blogs">
    <div class="group-title">
        <h2><?php echo @$instance['title'] ?></h2>
    </div>
    <div class="row">
        <!-- Popular Categorie Activation Start -->
        <div class="popular-cat-active owl-carousel">
            <?php $i = 0 ?>
            <?php if ($query_result->have_posts()) : while ($query_result->have_posts()) : $query_result->the_post(); ?>
              <?php if($i == 0): ?>
                  <div class="dual-pop-pro">
              <?php endif; ?>
                <!-- Single Blog Start -->
                <div class="main-pop-cat col-xs-12">
                    <div class="pop-cat-img">
                        <a href="<?php echo get_permalink($loop->post->ID) ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="blog-image"></a>
                    </div>
                    <div class="pop-cat-content">
                        <h4><a href="<?php echo get_permalink($loop->post->ID) ?>"><strong style="font-weight: 600;"><?php the_title(); ?></strong></a></h4>
                        <p><?php the_excerpt() ?></p>
                        <a class="pop-link" href="<?php echo get_permalink($loop->post->ID) ?>">
                            <?php echo __('[:vi]Xem thêm[:vi][:en]More[:en]') ?>
                        </a>
                    </div>
                </div>
                <!-- Single Blog End -->
            <?php if($i == 1): ?>
              </div>
            <?php endif; ?>
            <?php $i++ ?>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <!-- Popular Categorie Activation End -->
    </div>
    <!-- Row End -->
</div>
