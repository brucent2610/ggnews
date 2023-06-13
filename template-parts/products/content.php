<div class="product-item">
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