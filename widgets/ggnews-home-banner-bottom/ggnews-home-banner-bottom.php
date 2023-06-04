<?php
/*
Widget Name: GGNews Home Banner Bottom
Description: PhongNT GGNews Home Banner Bottom
Author: PhongNT
*/

class SiteOrigin_Widget_GGNewsHomeBannerBottom_Widget extends SiteOrigin_Widget {
    function __construct() {

        parent::__construct(
            'ggnews-home-banner-bottom',
            'GGNews Home Banner Bottom',
            array(
                'description' => "",
            ),
            array(),
            array(
                'title' => [
                    'label' => 'Tiêu đề',
                    'type' => 'text'
                ],
                'banner_bottom_loop' => [
                    'type' => 'repeater',
                    'label' => 'Banner Bottom',
                    'item_name' => 'Banner Bottom',
                    'fields' => [
                        'title' => [
                            'label' => 'Tiêu đề',
                            'type' => 'text'
                        ],
                        'href' => [
                            'label' => 'Đường dẫn nút',
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
                    ]
                ],
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

siteorigin_widget_register( 'ggnews-home-banner-bottom', __FILE__, 'SiteOrigin_Widget_GGNewsHomeBannerBottom_Widget' );
