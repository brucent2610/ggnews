<?php
// $category_slug = !empty($instance['product_categories']) ? explode(',', $instance['product_categories']) : [];
// $categories = [];
// $category_ids = [];
// foreach($category_slug as $cat) {
$category = get_term_by( 'slug', @$instance['product_categories'], 'product_cat' );  
$category_link = get_category_link($category->term_id);
//     $category_ids[] = $category->term_id;
//     $categories[] = $cat;
// }
// var_dump($category_ids);
$processed_query = [
    'post_type'     => 'product',
    'orderby'       => 'date',
    'order'         => 'desc',
    'product_cat'   => @$instance['product_categories']
    // 'category__in'  => $category_ids
];
$processed_query = array_filter($processed_query);
// var_dump($processed_query);
$query_result = new WP_Query($processed_query);
?>
<!-- More Electronics Products Start -->
<div class="more-electronics">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Best Selling Product Start -->
                <div class="best-selling-items border-default">
                    <div class="best-selling-categorie">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="group-title universal-margin">
                                    <h2><?php echo @$instance['title'] ?></h2>
                                    <a href="<?php echo $category_link ?>" class="viewmore">
                                        <?php echo __('[:vi]Xem thêm[:vi][:en]More[:en]') ?>
                                    </a>
                                </div>                                
                            </div>
                        </div>
                        <!-- Best Selling Product Content Start -->
                        <div class="new-pro-active more-e-pro owl-carousel">
                        <?php if ($query_result->have_posts()) : while ($query_result->have_posts()) : $query_result->the_post(); global $product; ?>
                            <!-- Double Product Start -->
                            <div class="double-product">
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="<?php echo get_permalink($loop->post->ID) ?>">
                                           <img class="primary-img" src="<?php the_post_thumbnail_url(); ?>" alt="single-product">
                                           <img class="secondary-img" src="<?php the_post_thumbnail_url(); ?>" alt="single-product">
                                        </a>
                                    </div>
                                    <div class="pro-content">
                                        <h4><a href="<?php echo get_permalink($loop->post->ID) ?>"><?php the_title(); ?></a></h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>
                                            <span class="price">
                                                <!-- <?php echo number_format((int) $product->get_regular_price()); ?> VNĐ -->
                                            </span>
                                        </p>
                                        <!-- <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="/lien-he" data-toggle="tooltip" title="Add to Cart">
                                                    <?php echo __('[:vi]Liên hệ ngay[:vi][:en]Contact Now[:en]') ?>   
                                                </a>
                                            </div>
                                        </div> -->
                                    </div>
                                    <!-- Product Content End -->
                                    <!-- <span class="sticker-sale">new</span> -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Double Product End -->
                        <?php endwhile; endif; ?>
                        <?php wp_reset_query(); ?>
                        </div>
                        <!-- Best Selling Product Content End -->
                    </div>
                </div>
                <!-- Best Selling Product End -->
            </div>
        </div>
    </div>
</div>
<!-- More Electronics Products End -->
