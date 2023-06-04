<?php
    $category = get_query_var( 'product_cat' );
    $category = !empty($category) ? $category : 'chuc-nang';
    $danhmucchucnamg = get_term_by( 'slug', $category, 'product_cat' );
    ggnews_menu_sub("product_cat", $danhmucchucnamg->term_id, "Danh mục sản phẩm");
?>
<hr>
<?php
    $danhmucthuonghieu = get_term_by( 'slug', 'thuong-hieu', 'product_cat' );
    ggnews_filter_products("product_cat", $danhmucthuonghieu->term_id, "Thương hiệu");
?>
<hr>
<?php
    $args=array(
        'posts_per_page' => 4,
        'post_type'      => 'product',
    );
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
        ?>
        <div class="recent-post pt-10 same-sidebar">
            <h3 class="sidebar-title">Sản phẩm mới nhất</h3>
            <ul>
                <?php
                    while ($my_query->have_posts()) : $my_query->the_post(); global $product; ?>
                    <!-- Singel Post Thumb Start -->
                    <li class="post-thumb fix">
                        <div class="left-post-thumb f-left mr-20 mb-20">
                            <a href="<?php echo get_permalink($loop->post->ID) ?>">
                                <img class="img" src="<?php the_post_thumbnail_url(); ?>" alt="latest-post-imgae">
                            </a>
                        </div>
                        <div class="right-post-thumb fix">
                            <h4><a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                            <span>
                                <!-- <?php echo number_format((int) $product->get_regular_price()); ?> VNĐ -->
                            </span>
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
<hr>