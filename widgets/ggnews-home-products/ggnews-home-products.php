<?php
/*
Widget Name: GGNews Home Products
Description: PhongNT GGNews Home Products
Author: PhongNT
*/

class SiteOrigin_Widget_GGNewsHomeProducts_Widget extends SiteOrigin_Widget {
    function __construct() {

        parent::__construct(
            'ggnews-home-products',
            'GGNews Home Products',
            array(
                'description' => "",
            ),
            array(),
            array(
                'title' => [
                    'label' => 'Tiêu đề',
                    'type' => 'text'
                ],
                'product_categories' => [
                    'label' => 'Slug danh mục',
                    'type' => 'text'
                ],
                'layout' => [
                    'type' => 'select',
                    'label' => __( 'Chọn loại', 'widget-form-fields-text-domain' ),
                    'default' => 'default',
                    'options' => array(
                        'default' => __( 'Mặc định', 'widget-form-fields-text-domain' ),
                        'hot' => __( 'Sản phẩm nổi bật', 'widget-form-fields-text-domain' ),
                    )
                ],
            ),
            plugin_dir_path(__FILE__)
        );
    }
    function get_template_name( $instance ) {
        if($instance['layout'])
            return $instance['layout'];

        return 'default';
    }
}

siteorigin_widget_register( 'ggnews-home-products', __FILE__, 'SiteOrigin_Widget_GGNewsHomeProducts_Widget' );
