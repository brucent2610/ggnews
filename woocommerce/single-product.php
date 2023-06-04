<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); global $product; ?>
<?php
global $product;
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
<div class="container main content">
	<div class="sixteen columns">
		<div class="product-1587186689">
			<div class="section product_section clearfix" itemscope="" itemtype="http://schema.org/Product">
				<div class="nine columns alpha ">
					<div class="flexslider product_gallery product-1587186689-gallery product_slider ">
						<div class="flex-viewport" style="overflow: hidden; position: relative;">
							<ul class="slides" style="width: 1400%; transition-duration: 0.6s; transform: translate3d(-2620px, 0px, 0px);">
                                <?php foreach($gallery as $key => $image): ?>
                                    <?php if($key == 0): ?>
                                        <li data-thumb="<?php echo $image['full'][0] ?>" data-title="" class="clone" aria-hidden="true" style="width: 655px; float: left; display: block;">
                                            <a href="" class="fancybox" data-fancybox-group="1587186689" title="">
                                                <img src="<?php echo $image['full'][0] ?>" data-src="<?php echo $image['full'][0] ?>" data-src-retina="<?php echo $image['full'][0] ?>" alt="Foldabox UK White Folding Gift Box with Custom Debossed Logo " data-index="4" data-image-id="21419224589" data-cloudzoom="zoomImage: '<?php echo $image['full'][0] ?>', tintColor: '#ffffff', zoomPosition: 'inside', zoomOffsetX: 0, touchStartDelay: 250" class="cloudzoom " draggable="false">
                                            </a>
                                            <div style="margin-top:10px!important;"><a class="PIN_1505839887401_button_pin" href="" data-pin-log="button_pinit" data-pin-href=""></a>
                                            </div>
                                        </li>
                                    <?php else: ?>
                                        <li data-thumb="<?php echo $image['full'][0] ?>" data-title="" class="clone" style="width: 655px; float: left; display: block;">
                                            <a href="" class="fancybox" data-fancybox-group="1587186689" title="">
                                                <img src="<?php echo $image['full'][0] ?>" data-src="<?php echo $image['full'][0] ?>" data-src-retina="<?php echo $image['full'][0] ?>" alt="Foldabox UK White Folding Gift Box with Custom Debossed Logo " data-index="4" data-image-id="21419224589" data-cloudzoom="zoomImage: '<?php echo $image['full'][0] ?>', tintColor: '#ffffff', zoomPosition: 'inside', zoomOffsetX: 0, touchStartDelay: 250" class="cloudzoom " draggable="false">
                                            </a>
                                            <div style="margin-top:10px!important;"><a class="PIN_1505839887401_button_pin" href="" data-pin-log="button_pinit" data-pin-href=""></a>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
							</ul>
						</div>
						<ol class="flex-control-nav flex-control-thumbs">
                            <?php foreach($gallery as $key => $image): ?>
                                <li><img src="<?php echo $image['full'][0] ?>" class="" draggable="false"></li>
                            <?php endforeach; ?>
						</ol>
						<ul class="flex-direction-nav">
							<li class="flex-nav-prev"><a class="flex-prev ss-icon" href="#">◅</a></li>
							<li class="flex-nav-next ss-icon"><a class="flex-next" href="#">▻</a></li>
						</ul>
					</div>
					&nbsp;
				</div>
				<div class="seven columns omega">
					<h1 class="product_name hidden-handheld-only" itemprop="name"><?php the_title() ?></h1>
					<p class="sku">
						Mã sản phẩm: <span itemprop="sku"><?php echo $product->get_sku(); ?></span>
					</p>
					<p class="modal_price" itemprop="offers" itemscope="" itemtype="">
						<meta itemprop="priceCurrency" content="GBP">
						<meta itemprop="seller" content="Foldabox UK and Europe">
						<link itemprop="availability" href="">
						<meta itemprop="itemCondition" content="New">
						<span class="sold_out"></span>
					</p>
					<div class="price-box">
						<span class="price-label">Giá:</span>
                        <span class="current_price">
                            <?php echo number_format((int) $product->get_regular_price()); ?>đ/Lốc 12 hộp
                        </span>
					</div>
                    <div class="price-box">
                        <span class="price-label">Giá sản phẩm mẫu:</span>
                        <span class="current_price">
                            <?php echo number_format(0.27 * (int) $product->get_regular_price()); ?>đ
                        </span>
                    </div>
					<p></p>
					<form action="" method="get" class="clearfix product_form">
                        <div class="left quantity-left">
                            <label for="quantity">Số lượng:</label>
                            <input type="number" min="1" size="2" class="quantity" name="quantity" id="quantity" value="1" max="173"> Lốc<span class="quantity-s"></span> gồm 12 hộp
                            <p>Đơn vị: Lốc</p>
                        </div>
						<div class="purchase clearfix inline_purchase">
                            <input type="hidden" name="add-to-cart" value="<?php echo $product->get_id() ?>">
                            <button type="submit" name="add" class="action_button add_to_cart" data-label="Add to Cart"><span class="text">Đặt hàng</span></button>
						</div>
						<div class="purchase clearfix inline_purchase">
							<div class="buy-sample">
                                <a href="<?php echo site_url() . '/san-pham-mau/?product_id=' . $product->get_id() ?>"><span class="text">Đặt 1 sản phẩm mẫu</span></a>
							</div>
						</div>
					</form>
					<div class="description" itemprop="description">
						<?php the_content(); ?>
					</div>
					<div class="meta">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
//$prefix = "foldabox_";
//$product_printing = rwmb_meta("{$prefix}product_printing");
//$product_mailing_carton = rwmb_meta("{$prefix}product_mailing_carton");
//$product_delivery_information = rwmb_meta("{$prefix}product_delivery_information");
//$product_discounts = rwmb_meta("{$prefix}product_discounts");
//$product_samples = rwmb_meta("{$prefix}product_samples");
//$product_specification = rwmb_meta("{$prefix}product_specification");
//$product_packing = rwmb_meta("{$prefix}product_packing");
?>
<div class="clearfix">
<!--	<div class="more-details clearfix">-->
<!--		<div class="more-details__header">-->
<!--			<div class="container">-->
<!--				<div class="sixteen columns">-->
<!--					<ul class="nav nav-tabs">-->
<!--						<li class="spt-tab-title active"><a data-toggle="tab" href="#menu1">In</a></li>-->
<!--						<li class="spt-tab-title"><a data-toggle="tab" href="#menu2">Bìa cứng carton</a></li>-->
<!--						<li class="spt-tab-title"><a data-toggle="tab" href="#menu3">Thông tin vận chuyển</a></li>-->
<!--						<li class="spt-tab-title"><a data-toggle="tab" href="#menu4">Giảm giá</a></li>-->
<!--						<li class="spt-tab-title"><a data-toggle="tab" href="#menu5">Mẫu</a></li>-->
<!--						<li class="spt-tab-title"><a data-toggle="tab" href="#menu6">Thành phần</a></li>-->
<!--						<li class="spt-tab-title"><a data-toggle="tab" href="#menu7">Đóng gói</a></li>-->
<!--					</ul>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--		<div class="more-details__container">-->
<!--			<div class="container">-->
<!--				<div class="sixteen columns">-->
<!--					<div class="tab-content">-->
<!--						<div id="menu1" class="tab-pane fade more-details__description in active">-->
<!--							--><?php //echo @$product_printing ?>
<!--						</div>-->
<!--						<div id="menu2" class="tab-pane fade more-details__description">-->
<!--                            --><?php //echo @$product_mailing_carton ?>
<!--						</div>-->
<!--						<div id="menu3" class="tab-pane fade more-details__description">-->
<!--                            --><?php //echo @$product_delivery_information ?>
<!--						</div>-->
<!--						<div id="menu4" class="tab-pane fade more-details__description">-->
<!--                            --><?php //echo @$product_discounts ?>
<!--						</div>-->
<!--						<div id="menu5" class="tab-pane fade more-details__description">-->
<!--                            --><?php //echo @$product_samples ?>
<!--						</div>-->
<!--						<div id="menu6" class="tab-pane fade more-details__description">-->
<!--                            --><?php //echo @$product_specification ?>
<!--						</div>-->
<!--						<div id="menu7" class="tab-pane fade more-details__description">-->
<!--                            --><?php //echo @$product_packing ?>
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
    <?php
        $args=array(
            'post__not_in'   => array($product->ID),
            'posts_per_page' => 4,
            'post_type'      => 'product',
        );
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) {
            ?>
        <div class="container">
            <div class="sixteen columns">
                <br class="clear">
                <h4 class="title center related-title">Sản phẩm liên quan</h4>
                <div class="feature_divider"></div>
                <div itemtype="">
                    <?php
                    while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <div class="four columns alpha thumbnail even" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/Product">
                            <a href="<?php echo get_permalink($loop->post->ID) ?>" itemprop="url">
                                <div class="relative product_image">
                                    <img src="<?php the_post_thumbnail_url(); ?>"
                                         data-src="<?php the_post_thumbnail_url(); ?>"
                                         data-src-retina="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" style="opacity: 1;">
                                </div>
                                <div class="info">
                                    <span class="title" itemprop="name"><?php the_title(); ?></span>
                                    <span class="price " itemprop="offers" itemscope="" itemtype="">
                                      <span itemprop="price"><?php echo number_format($product->get_regular_price()); ?>đ/12 Hộp</span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    <?php
                    endwhile;
                } ?>
                <br class="clear product_clear">
            </div>
        </div>
        <?php
        wp_reset_query();
    ?>
	</div>
<?php endwhile; ?>
<?php get_footer(); ?>

