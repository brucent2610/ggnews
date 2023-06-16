<?php get_header() ?>
<?php while ( have_posts() ) : the_post(); ?>
<!-- Breadcrumb Start -->
<?php
$category = get_the_category();
ggnews_breadcrumbs([
    [
        'href' => get_category_link($category[0]->cat_ID),
        'title' => $category[0]->cat_name,
        'slug'  => $category[0]->slug
    ],
    [
        "title" => get_the_title()
    ]
]);
$prefix = 'ggnews_';
$top_banners = rwmb_meta( $prefix . '_post_top_banner', array( 'size' => 'thumbnail' ) );
$top_banner_url = '';
foreach ($top_banners as $key => $top_banner) {
    $top_banner_url = $top_banner['full_url'];
    break;
}
?>
<!-- Breadcrumb End -->
<!-- Blog Area Start -->
<div class="blog-area pb-50">
    <div class="container">
        <div class="row">
            <!-- Main Blog Start -->
            <div class="col-md-8 col-sm-12">
                <!-- Blog Details Start -->
                <div class="blog-details">
                    <div class="blog-img">
                        <img src="<?php echo @$top_banner_url ?>" alt="blog-image">
                    </div>
                    <div class="post-info">
                        <div class="post-info-left">
                            <!-- <div class="post-date"> -->
                                <!-- <span>28</span> Aug -->
                            <!-- </div> -->
                            <a href="#" class="post-author">
                                <i class="fa fa-user"></i> Đăng bởi <?php echo get_the_author() ?>
                            </a>
                        </div>
                        <div class="post-info-right">

                        </div>
                    </div>
                    <h3 class="semi-title"><?php the_title() ?></h3>
                    <div class="content-blog">
                        <?php the_content(); ?>
                    </div>
                    <!--  Blog-Pager Start  -->
                    <div class="blog-pager">
                        <ul class="pager">
                            <li class="previous"><?php previous_post_link( '%link', '%title', true ); ?></li>
                            <li class="next"><?php next_post_link( '%link', '%title', true ); ?></li>
                        </ul>
                    </div>
                    <!--  Blog-Pager End  -->
                </div>
                <!-- Blog Details End -->
                <!-- Blog Realated Post Start -->
                <?php
                    $args=array(
                        'post__not_in'   => array(get_the_ID()),
                        'posts_per_page' => 2,
                        'post_type'      => 'post',
                    );
                    $my_query = new WP_Query($args);
                    if( $my_query->have_posts() ) {
                        ?>
                        <div class="blog-related-post recent-post mtb-50">
                            <h3 class="sidebar-title">Bài viết liên quan</h3>
                            <div class="blog-related-post-active owl-carousel">
                                <?php
                                    while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                        <!-- Single Blog Start -->
                                        <div class="single-blog">
                                            <div class="blog-img">
                                                <a href="<?php echo get_permalink($loop->post->ID) ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="blog-image"></a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-content-upper">
                                                    <h6 class="<?php echo get_permalink($loop->post->ID) ?>"><a href="<?php echo get_permalink($loop->post->ID) ?>"><?php the_title(); ?></a></h6>
                                                    <p><?php the_excerpt(); ?></p>
                                                </div>
                                                <div class="blog-content-lower">
                                                    <a href="<?php echo get_permalink($loop->post->ID) ?>"><?php echo get_the_author() ?></a>
                                                    <!-- <span class="f-right">05 Nov, 2017</span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Blog End -->
                                    <?php
                                    endwhile;
                                } ?>
                            </div>
                        </div>
                    <!-- Blog Realated Post Start -->
                    <?php
                    wp_reset_query();
                ?>
            </div>
            <!-- Main Blog End -->
            <!-- Sidebar Main Blog Start -->
            <div class="col-md-4 col-sm-12">
                <div class="main-right-sidebar border-default universal-padding">
                    <!-- Recent Post Start -->
                    <?php
                        $args=array(
                            'posts_per_page' => 4,
                            'post_type'      => 'post',
                        );
                        $my_query = new WP_Query($args);
                        if( $my_query->have_posts() ) {
                            ?>
                            <div class="recent-post pt-30 same-sidebar">
                                <h3 class="sidebar-title">Bài viết mới nhất</h3>
                                <ul>
                                  <?php
                                      while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                        <!-- Singel Post Thumb Start -->
                                        <li class="post-thumb fix">
                                            <div class="left-post-thumb f-left mr-20 mb-20">
                                                <a href="<?php echo get_permalink($loop->post->ID) ?>">
                                                  <img class="img" src="<?php the_post_thumbnail_url(); ?>" alt="latest-post-imgae">
                                                </a>
                                            </div>
                                            <div class="right-post-thumb fix">
                                                <h4><a href="<?php echo get_permalink($loop->post->ID) ?>"><?php the_title(); ?></a></h4>                                                
                                            </div>
                                        </li>
                                        <!-- Singel Post Thumb End -->
                                        <?php
                                        endwhile;
                                    } ?>
                                </ul>
                            </div>
                        <!-- Blog Realated Post Start -->
                        <?php
                        wp_reset_query();
                    ?>
                    <!-- Recent Post End -->
                    <!-- Category Post Start -->
                    <div class="categorie recent-post same-sidebar">
                         <h3 class="sidebar-title mt-40">Danh mục</h3>
                         <ul class="categorie-list">
                             <?php foreach (@$category as $key => $cat) { ?>
                                 <li><a href="<?php get_category_link($cat->cat_ID) ?>"><?php echo $cat->cat_name ?></a></li>
                             <?php } ?>
                         </ul>
                    </div>
                    <!-- Category Post End -->
                    <!-- Meta Post Start -->
                    <?php $post_tags = get_the_tags(get_the_ID()); ?>
                    <?php if ( $post_tags ): ?>
                    <div class="categorie recent-post same-sidebar">
                         <h3 class="sidebar-title mt-40">Tags</h3>
                         <ul class="tag-list">
                             <?php foreach( $post_tags as $tag ): ?>
                                <li><a href="<?php echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name ?></a></li>
                             <?php endforeach; ?>
                         </ul>
                    </div>
                  <?php endif; ?>
                    <!-- Meta Post End -->
                </div>
            </div>
            <!-- Sidebar Main Blog End -->
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Blog Area End -->
<?php endwhile; ?>
<?php get_footer() ?>
