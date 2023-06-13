<?php
$category = get_term_by( 'slug', @$instance['product_categories'], 'product_cat' );  
$category_link = get_category_link($category->term_id);
$processed_query = [
    'post_type'     => 'product',
    'orderby'       => 'date',
    'order'         => 'desc',
    'product_cat'   => @$instance['product_categories']
];
$processed_query = array_filter($processed_query);
$query_result = new WP_Query($processed_query);
?>
<section>
    <div class="wrapper-container">
        <div class="header-list">
            <div class="tilte-text">
                <a href="<?php echo $category_link ?>"><?php echo @$instance['title'] ?></a>
            </div>
            <hr class="title-line" />
        </div>
        <div>
            <?php if ($query_result->have_posts()) : while ($query_result->have_posts()) : $query_result->the_post(); global $product; ?>
                <div class="product-item">
                    <div class="product-img">
                        <a href="<?php echo get_permalink($loop->post->ID) ?>"> 
                            <img alt="product item" src="<?php the_post_thumbnail_url(); ?>" />
                        </a>
                        <span class="badge bg-danger" class="badge">
                            <img src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/insurance.png" alt="" />
                        </span>
                    </div>
                    <p class="product-name">
                        <a href="<?php echo get_permalink($loop->post->ID) ?>"> <?php the_title(); ?></a>
                    </p>
                    <div class="product-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="product-status">
                        <p>Đã bán </p>
                        35
                    </div>
                    <div class="product-stock">
                        <p>Còn lại</p>
                        903
                    </div>
                    <div class="product-price">
                        <?php echo number_format((int) $product->get_regular_price()); ?> vnd
                    </div>
                    <div class="add-to-cart">
                        <button>
                            <a href="<?php echo $product->add_to_cart_url() ?>" data-quantity="1" class="button product_type_product">
                                Thêm vào giở hàng
                            </a>
                        </button>
                    </div>
                    <hr class="product-line" />
                </div>
            <?php endwhile; endif; ?>
        </div>
        <div>
            <div class="product-item-mobile">
                <?php if ($query_result->have_posts()) : while ($query_result->have_posts()) : $query_result->the_post(); global $product; ?>
                    <div class="product-item-mobile-container">
                        <div class="product-img">
                            <a href="<?php echo get_permalink($loop->post->ID) ?>"> 
                                <img alt="product item" src="<?php the_post_thumbnail_url(); ?>" />
                            </a>
                            <span class="badge bg-danger" class="badge">
                                <img src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/insurance.png" alt="" />
                            </span>
                        </div>
                        <p class="product-name">
                            <a href="<?php echo get_permalink($loop->post->ID) ?>"> <?php the_title(); ?></a>
                        </p>
                        <div class="product-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="status">
                            <div class="product-status">
                                <p>Đã bán </p>
                                35
                            </div>
                            <div class="product-stock">
                                <p>Còn lại</p>
                                903
                            </div>
                        </div>
                        <div class="product-price">
                            <?php echo number_format((int) $product->get_regular_price()); ?> vnd
                        </div>
                        <div class="add-to-cart">
                            <button>
                                <a href="<?php echo $product->add_to_cart_url() ?>" data-quantity="1" class="button product_type_product">
                                    Thêm vào giở hàng
                                </a>
                            </button>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <?php wp_reset_query(); ?>
        <div class="see-more">
            <div class="see-more-detail">
                <p><a href="<?php echo $category_link ?>">Xem thêm</a></p>
                <i class="fa-solid fa-caret-down"></i>
            </div>
        </div>
    </div>
</section>