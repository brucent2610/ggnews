<section>
    <div class="wrapper-container">
        <div class="header-list">
            <div class="tilte-text">
                <a href="<?php echo esc_url( home_url( '/danh-muc-san-pham/' ) ); ?>"> danh mục sản phẩm</a>
            </div>
            <hr class="title-line" />
        </div>
        <div class="product-list">
            <?php foreach(@$instance['tags_loop'] as $tag): ?>
                <button><a href="<?php echo ci_get_categories_links($tag['title']) ?>"><?php echo $tag['title'] ?></a> </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>