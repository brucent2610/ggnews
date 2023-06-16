<?php get_header() ?>
<?php
$term = get_term_by('slug', get_query_var("term"), "product_cat");
?>
<?php if (have_posts()) : ?>
<div class="filter">
    <div class="wrapper">
        <div class="filter-container">
            <input type="text" placeholder="Nhập tên sản phẩm" />
            <select name="dm" id="dm">
                <option value=0>Tất cả danh mục</option>
                <option value=1>Saab</option>
                <option value=2>Opel</option>
                <option value=3>Audi</option>
            </select>
            <div class="range-price">
                <p>Giá từ</p>
                <input type="text" placeholder="100.000 vnd" />
                <p>Đến</p>
                <input type="text" placeholder="500.000 vnd" />
            </div>
            <button>Tìm kiếm</button>
        </div>
    </div>
</div>
<div class="filter-mobile">
    <div class="wrapper">
        <div class="filter-container-mobile">
            <input class="input-filter" type="text" placeholder="Nhập tên sản phẩm" />
            <select name="dm" id="dm">
                <option value=0>Tất cả danh mục</option>
                <option value=1>Saab</option>
                <option value=2>Opel</option>
                <option value=3>Audi</option>
            </select>
            <div class="range-price-mobile">
                <div>
                    <p>Giá từ</p>
                    <input type="text" placeholder="100.000 vnd" />
                </div>
                <div>
                    <p>Đến</p>
                    <input type="text" placeholder="500.000 vnd" />
                </div>
            </div>
            <button>Tìm kiếm</button>
        </div>
    </div>
</div>
<div class="wrapper" style="overflow: auto;">
    <div class="product-list-container">
        <div class="header-list">
            <div class="tilte-text">
                <a href="javascript:void();"><?php echo single_cat_title("", false) ?></a>
            </div>
            <hr class="title-line" />
        </div>
        <div>
            <?php 
                while (have_posts()) : the_post(); global $product; 
            ?>
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
                    <a href="<?php echo get_permalink($loop->post->ID) ?>"> 
                        <?php the_title(); ?>
                    </a>
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
                    <!-- <button>
                        Thêm vào giở hàng
                    </button> -->
                    <button>
                        <a href="<?php echo $product->add_to_cart_url() ?>" data-quantity="1" class="button product_type_product">
                            Thêm vào giở hàng
                        </a>
                    </button>
                </div>
                <hr class="product-line" />
            </div>
            <?php 
                endwhile;
            ?>
        </div>
        <div>
            <?php 
                while (have_posts()) : the_post(); global $product; 
            ?>
            <div class="product-item-mobile">
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
                        <a href="<?php echo get_permalink($loop->post->ID) ?>"> 
                            <?php the_title(); ?>
                        </a>
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
                        <!-- <button>
                            Thêm vào giở hàng
                        </button> -->
                        <a href="<?php echo $product->add_to_cart_url() ?>" data-quantity="1" class="button product_type_product">
                            Thêm vào giở hàng
                        </a>
                    </div>
                </div>
            </div>
            <?php 
                endwhile;
            ?>
        </div>
        <?php 
            if($wp_query->max_num_pages > 1):
        ?>
        <div class="breadcrubm-page-show border-default universal-padding mt-30 fix">
            <div class="breadcrumb-list-item f-left">
                <?php ggnews_product_pagination($wp_query->max_num_pages); ?>
            </div>
            <div class="page-list f-right">
                
            </div>
        </div>
        <?php 
            endif;
        ?>
    </div>
</div>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php get_footer() ?>