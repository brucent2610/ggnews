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
<div class="wrapper">
    <div class="header-list">
        <div class="tilte-text">
            <?php echo @$instance['title'] ?>
        </div>
        <hr class="title-line" />
    </div>
    <div>
        <?php if ($query_result->have_posts()) : while ($query_result->have_posts()) : $query_result->the_post(); global $product; ?>
            <div class="product-item">
                <div class="product-img">
                    <img alt="product item" src="<?php the_post_thumbnail_url(); ?>" />
                    <span class="badge bg-danger" class="badge">
                        <img src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/insurance.png" alt="" />
                    </span>
                </div>
                <p class="product-name">
                    Mỹ phẩm Hàn Quốc AZ
                    Solutions Premium
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
                        Thêm vào giở hàng
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
                        <img alt="product item" src="<?php the_post_thumbnail_url(); ?>" />
                        <span class="badge bg-danger" class="badge">
                            <img src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/insurance.png" alt="" />
                        </span>
                    </div>
                    <p class="product-name">
                        <?php the_title(); ?>
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
                            Thêm vào giở hàng
                        </button>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
    <?php wp_reset_query(); ?>
    <div class="see-more">
        <div class="see-more-detail">
            <p>Xem thêm</p>
            <i class="fa-solid fa-caret-down"></i>
        </div>
    </div>
</div>