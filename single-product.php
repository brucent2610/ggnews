<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); global $product; ?>
<?php
    global $product;
    $product_id = get_the_ID();
    $attachment_ids = $product->get_gallery_image_ids();
    $gallery = [];
    if ( $attachment_ids && has_post_thumbnail() ) {
        foreach ( $attachment_ids as $attachment_id ) {
            $full_size_image = wp_get_attachment_image_src( $attachment_id, 'full' );
            $thumbnail       = wp_get_attachment_image_src( $attachment_id, 'shop_thumbnail' );
            $image_title     = get_post_field( 'post_title', $attachment_id );

            $gallery[] = array(
                'title' => $image_title,
                'thumbnail' => $thumbnail,
                'full' => $full_size_image
            );
        }
    }
?>
<div class="wrapper">
    <div class="product-detail-container">
        <div class="product-detail-item">
            <div class="product-detail-image">
                <?php foreach($gallery as $key => $image): ?>
                    <img src="<?php echo $image['full'][0] ?>" alt="product detail" />
                <?php endforeach; ?>          
            </div>
            <div class="product-detail-main">
                <div class="product-detail-info">
                    <h2><?php the_title() ?></h2>
                    <div class="product-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p><?php the_excerpt(); ?></p>
                    <p class="text-price">99.000 vnd</p>
                    <p class="text-voucher">50.000 vnd + 1000 point</p>
                    <div class="btn-action">
                        <button class="btn-cart">Thêm vào giỏ hàng</button>
                        <button class="btn-buy">Đặt hàng ngay</button>
                    </div>

                    <h5 class="sub-text">Chia sẻ cho bạn bè</h5>
                    <div class="social-list">
                        <img src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/circle-facebook.png" alt="fb" />
                        <img src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/circle-messenger.png" alt="mess" />
                        <img src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/circle-zalo.png" alt="zalo" />
                        <img src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/circle-copylink.png" alt="link" />
                    </div>
                </div>
            </div>
        </div>
        <div class="product-items">
            <h2>Chi tiết sản phẩm</h2>
            <?php the_content() ?>
        </div>
        <div class="store-info">
            <h2>Thông tin nhà cung cấp</h2>
            <div class="user-feedback">
                <img alt="profile" src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/profile.png" />
                <div class="user-info">
                    <h5>Công ty TNHH ABC</h5>
                    <div class="product-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="comment-container">
        <h1>Bình luận</h1>
        <p>0 comment</p>
        <div class="sort-comment">
            <p>Sort</p>
            <select name="dm" id="dm">
                <option value=0>Oldest</option>
                <option value=1>Saab</option>
                <option value=2>Opel</option>
                <option value=3>Audi</option>
            </select>
        </div>
        <hr />
        <div class="comment-input">
            <img alt="user img" src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/profile.png" />
            <input class="comments" placeholder="Add a comment ..." />
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php 
    wp_reset_query(); 
    wp_reset_postdata();
?>
 <?php
    $related_query = ci_get_related_posts( get_the_ID(), 6 );
    if( $related_query->have_posts() ) {
?>
<!-- sản phẩm liên quan -->
<div class="wrapper">
    <div class="relative-product">
        <div class="header-list">
            <div class="tilte-text">
                sản phẩm liên quan </div>
            <hr class="title-line" />
        </div>
        <div>
            <?php while ($related_query->have_posts()) : $related_query->the_post(); global $product; ?>
                <div class="product-item">
                    <div class="product-img">
                        <img alt="product item" src="<?php the_post_thumbnail_url(); ?>" />
                        <span class="badge bg-danger" class="badge">
                            <img src="./images/insurance.png" alt="" />
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
                        99.00 vnd
                    </div>
                    <div class="add-to-cart">
                        <button>
                            Thêm vào giở hàng
                        </button>
                    </div>

                    <hr class="product-line" />
                </div>
            <?php endwhile; ?>
        </div>
        <div>
            <div class="product-item-mobile">
                <?php while ($related_query->have_posts()) : $related_query->the_post(); global $product; ?>
                    <div>
                        <div class="product-img">
                            <img alt="product item" src="./images/p4.png" />
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
                <?php endwhile; ?>
            </div>
        </div>
        <div class="see-more">
            <div class="see-more-detail">
                <p>Xem thêm</p>
                <i class="fa-solid fa-caret-down"></i>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php 
    wp_reset_query(); 
    wp_reset_postdata();
?>
<?php get_footer(); ?>