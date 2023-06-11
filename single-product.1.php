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
<?php
    $list = [];
    $cat_list = [];
    $terms = get_the_terms( false, 'product_cat' );
    $term = null;
    foreach($terms as $ter) {
        $list[] = [
            'id'        => $ter->term_id,
            'href'      => get_term_link($ter, 'product_cat'),
            'title'     => $ter->name,
            'slug'      => $ter->slug,
            'parent'    => $ter->parent
        ];
        $cat_list[] = [
            'id'        => $ter->term_id,
            'href'      => get_term_link($ter, 'product_cat'),
            'title'     => $ter->name,
            'slug'      => $ter->slug,
            'parent'    => $ter->parent
        ];
        $term = $ter;
    }
    $list[] = ['title' => get_the_title()];
    ggnews_breadcrumbs($list);
?>
<div class="container">
<div class="row">
    <div class="col-md-9 col-lg-9 col-xs-12 pull-right">
        <div class="main-product-thumbnail pb-20">
            <div class="row">
                <!-- Main Thumbnail Image Start -->
                <div class="col-sm-5">
                    <!-- Thumbnail Large Image start -->
                    <div class="tab-content">
                        <?php foreach($gallery as $key => $image): ?>
                            <div id="thumb<?php echo $key + 1 ?>" class="tab-pane fade in <?php echo $key == 0 ? 'active' : null ?>">
                                <a data-fancybox="images" href="<?php echo $image['full'][0] ?>">
                                    <img src="<?php echo $image['full'][0] ?>" alt="product-view">
                                </a>
                            </div>
                        <?php endforeach; ?>                    
                    </div>
                    <!-- Thumbnail Large Image End -->
                    <!-- Thumbnail Image End -->
                    <div class="product-thumbnail">
                        <div class="thumb-menu owl-carousel">
                            <?php foreach($gallery as $key => $image): ?>                            
                                <div class="<?php echo $key == 0 ? 'active' : null ?>">
                                    <a data-toggle="tab" href="#thumb<?php echo $key + 1 ?>"> 
                                        <img src="<?php echo $image['full'][0] ?>" alt="product-thumbnail">
                                    </a>
                                </div>
                            <?php endforeach; ?>                             
                        </div>
                    </div>
                    <!-- Thumbnail image end -->
                </div>
                <!-- Main Thumbnail Image End -->
                <!-- Thumbnail Description Start -->
                <div class="col-sm-7">
                    <div class="thubnail-desc fix">
                        <h3 class="product-header"><?php the_title() ?></h3>
                        <div class="pro-price mb-10">
                            <p class="mb-10"><span class="price">Mã sản phẩm: <?php echo $product->get_sku(); ?></span></p>
                            <!-- <p><span class="price"><?php echo number_format((int) $product->get_regular_price()); ?> VNĐ</span></p>                                                     -->
                        </div>                    
                        <div class="box-quantity">
                            <a class="add-cart" href="lien-he/">Liên hệ ngay</a>
                        </div>
                        <div class="short-description">
                        <p class="ptb-10">
                            <?php the_excerpt(); ?>
                        </p>
                        </div>
                        <?php $post_tags = get_the_terms( get_the_ID(), 'product_tag' );?>   
                        <br> 
                        <p>Tags: 
                            <ul class="tag-list">
                            <?php foreach( $post_tags as $tag ): ?>
                                <li><a href="<?php echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </p>
                        <?php 
                            $brand_cat = get_term_by( 'slug', 'thuong-hieu', 'product_cat' );  
                            // var_dump($brand_cat);die;              
                        ?>
                        <p>Thương hiệu: 
                            <ul class="tag-list">
                            <?php 
                                $cat_brands = [];
                                $cat_related = [];
                            ?>                            
                            <?php foreach( $cat_list as $cat ): ?>
                                <?php 
                                    $cat_related[] = $cat['slug'];
                                    if(in_array($cat['slug'], [
                                        'thuong-hieu',
                                        'chuc-nang'
                                    ]) || 
                                        $cat['parent'] != $brand_cat->term_id
                                    ) {
                                        continue;
                                    }
                                    $cat_brands[] = $cat['slug'];
                                ?>
                                <li><a href="<?php echo $cat['href'] ?>"><?php echo $cat['title'] ?></a></li>
                            <?php endforeach;?>
                            </ul>
                        </p>
                    </div>
                </div>
                <!-- Thumbnail Description End -->
            </div>
            <!-- Row End -->
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail End -->
        <!-- Product Thumbnail Description Start -->
        <div class="thumnail-desc pb-10">            
            <div class="row">
                <div class="col-sm-12">
                    <ul class="main-thumb-desc">
                        <li class="active"><a data-toggle="tab" href="#dtail">Mô tả chi tiết</a></li>
                    </ul>
                    <!-- Product Thumbnail Tab Content Start -->
                    <div class="tab-content thumb-content border-default">
                        <div id="dtail" class="tab-pane fade in active">
                            <?php //echo get_post_field('post_content', $post->ID); ?>
                            <?php the_content() ?>
                        </div>
                    </div>
                    <!-- Product Thumbnail Tab Content End -->
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Product Thumbnail Description End -->
        <?php endwhile; ?>
        <?php 
            wp_reset_query(); 
            wp_reset_postdata();
        ?>
        <?php
            $related_query = ci_get_related_posts( get_the_ID(), 6 );
            if( $related_query->have_posts() ) {
        ?>
            <!-- Realted Product Start -->
            <div class="related-product mb-10">                
                <div class="border-default universal-padding">
                    <div class="group-title">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                    <!-- Realted Product Activation Start -->                    
                    <div class="new-pro-active new-upsell-pro owl-carousel">
                        <!-- Single Product Start -->
                        <?php while ($related_query->have_posts()) : $related_query->the_post(); global $product; ?>
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="<?php echo get_permalink($loop->post->ID) ?>">
                                    <img class="primary-img" src="<?php the_post_thumbnail_url(); ?>" alt="single-product">
                                    <!-- <img class="secondary-img" src="img/products/10.jpg" alt="single-product"> -->
                                </a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <h4><a href="<?php echo get_permalink($loop->post->ID) ?>"><?php the_title(); ?></a></h4>
                                <p>
                                    <span class="price">
                                        <!-- <?php echo number_format((int) $product->get_regular_price()); ?> VNĐ -->
                                    </span>
                                </p>
                                <!-- <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="/lien-he/" data-toggle="tooltip" title="Liên hệ">Liên hệ</a>
                                    </div>
                                </div> -->
                            </div>
                            <!-- Product Content End -->
                        </div>
                        <?php endwhile; ?>
                        <!-- Single Product End -->
                    </div>
                    <!-- Realted Product Activation End -->
                </div>
            </div>
            <!-- Realted Product End -->
        <?php } ?>
        <?php 
            wp_reset_query(); 
            wp_reset_postdata();
        ?>
        <?php
            $brand_query = ci_get_brand_posts(get_the_ID(), $cat_brands, 6);
            if( $brand_query->have_posts() ) {
        ?>
            <!-- Realted Product Start -->
            <div class="related-product mb-10">                
                <div class="border-default universal-padding">
                    <div class="group-title">
                        <h2>Sản phẩm cùng thương hiệu</h2>
                    </div>
                    <!-- Realted Product Activation Start -->                    
                    <div class="new-pro-active new-upsell-pro owl-carousel">
                        <!-- Single Product Start -->
                        <?php while ($brand_query->have_posts()) : $brand_query->the_post(); global $product; ?>
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="<?php echo get_permalink($loop->post->ID) ?>">
                                    <img class="primary-img" src="<?php the_post_thumbnail_url(); ?>" alt="single-product">
                                    <!-- <img class="secondary-img" src="img/products/10.jpg" alt="single-product"> -->
                                </a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <h4><a href="<?php echo get_permalink($loop->post->ID) ?>"><?php the_title(); ?></a></h4>
                                <p>
                                    <span class="price">
                                        <!-- <?php echo number_format((int) $product->get_regular_price()); ?> VNĐ -->
                                    </span>
                                </p>
                                <!-- <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="/lien-he/" data-toggle="tooltip" title="Liên hệ">Liên hệ</a>
                                    </div>
                                </div> -->
                            </div>
                            <!-- Product Content End -->
                        </div>
                        <?php endwhile;  ?>
                        <!-- Single Product End -->
                    </div>
                    <!-- Realted Product Activation End -->
                </div>
            </div>
            <!-- Realted Product End -->
        <?php } ?>
        <?php 
            wp_reset_query(); 
            wp_reset_postdata();
        ?>
    </div>
    <div class="col-md-3 col-lg-3 col-xs-12">        
        <div class="main-right-sidebar border-default universal-padding">
            <?php get_sidebar( 'product' ); ?>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>
