<?php get_header() ?>
<?php
ggnews_breadcrumbs([
    [
        "title" => single_cat_title("", false)
    ]
]);

$term = get_term_by('slug', get_query_var("term"), "product_cat");
?>
<?php if (have_posts()) : ?>
<div class="main-shop-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3">
                <!-- Single Banner Start -->
<!--                <div class="single-banner zoom mb-10">-->
<!--                    <a href="#"><img src="--><?php //echo get_template_directory_uri() ?><!--/media/img/banner/13-real.jpg" alt="slider-banner"></a>-->
<!--                </div>-->
                <!-- Single Banner End -->
                <!-- Grid & List View Start -->
                <div class="grid-list-top border-default universal-padding fix mb-10">
                    <div class="grid-list-view f-left">
                        <!-- <ul class="list-inline">                                
                            <li><span class="grid-item-list"> Items 1-12 of 13</span></li>
                        </ul> -->
                    </div>
                    <!-- Toolbar Short Area Start -->
                    <div class="main-toolbar-sorter f-right">
                        <div class="toolbar-sorter">
                            <label>sort by</label>
                            <select class="sorter" name="sorter">
                                <option value="Position" selected="selected">Mới nhất</option>
                                <option value="Product Name">Giá thấp đến cao</option>
                                <option value="Price">Giá cao tới thấp</option>
                            </select>
                            <span><a href="#"><i class="fa fa-arrow-up"></i></a></span>
                        </div>
                    </div>
                    <!-- Toolbar Short Area End -->
                </div>
                <!-- Grid & List View End -->
                <div class="main-categorie">
                    <!-- Grid & List Main Area End -->
                    <div class="tab-content border-default fix">
                        <div id="grid-view" class="tab-pane fade in active">
                            <?php 
                                while (have_posts()) : the_post(); global $product; 
                            ?>
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="<?php the_permalink() ?>">
                                        <img class="primary-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">                                    
                                    </a>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>                                
                                    <p><span class="price"><?php echo number_format((int) $product->get_regular_price()); ?> VNĐ</span></p>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="lien-he/" data-toggle="tooltip" title="Liên hệ ngay">Liên hệ ngay</a>
                                        </div>                                        
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                            <?php 
                                endwhile;
                            ?>
                        </div>
                        <!-- #grid view End -->
                    </div>
                    <!-- Grid & List Main Area End -->
                </div>
                <!--Breadcrumb and Page Show Start -->
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
                <!--Breadcrumb and Page Show End -->                
            </div>
            <div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9">
                <div class="main-right-sidebar border-default universal-padding">
                    <?php get_sidebar( 'product' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php get_footer() ?>
