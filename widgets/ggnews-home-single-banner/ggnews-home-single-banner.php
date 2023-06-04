<?php
/*
Widget Name: GGNews Home Single Banner
Description: PhongNT GGNews Home Single Banner
Author: PhongNT
*/

class SiteOrigin_Widget_GGNewsHomeSingleBanner_Widget extends SiteOrigin_Widget {
    function __construct() {

        parent::__construct(
            'ggnews-home-single-banner',
            'GGNews Home Single Banner',
            array(
                'description' => "",
            ),
            array(),
            array(
                'title' => [
                    'label' => 'Tiêu đề',
                    'type' => 'text'
                ],
                'href' => [
                    'label' => 'Đường dẫn',
                    'type' => 'text'
                ],
                'image' => [
                    'type'      => 'media',
                    'label'     => __( 'Hình', 'widget-form-fields-text-domain' ),
                    'choose'    => __( 'Chọn hình', 'widget-form-fields-text-domain' ),
                    'update'    => __( 'Câp nhật hình', 'widget-form-fields-text-domain' ),
                    'library'   => 'image',
                    'fallback'  => true
                ]
            ),
            plugin_dir_path(__FILE__)
        );
    }
    function get_template_name( $instance ) {
//        return 'default';
        if($instance['layout'])
            return $instance['layout'];

        return 'default';
    }
}

siteorigin_widget_register( 'ggnews-home-single-banner', __FILE__, 'SiteOrigin_Widget_GGNewsHomeSingleBanner_Widget' );
