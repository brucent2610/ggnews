<?php
/*
Widget Name: GGNews Home Banners
Description: PhongNT GGNews Home Banners
Author: PhongNT
*/

class SiteOrigin_Widget_GGNewsHomeBanners_Widget extends SiteOrigin_Widget {
    function __construct() {

        parent::__construct(
            'ggnews-home-banners',
            'GGNews Home Banners',
            array(
                'description' => "",
            ),
            array(),
            array(
                'title' => [
                    'label' => 'Tiêu đề',
                    'type' => 'text'
                ],
                'banner_left_loop' => [
                    'type' => 'repeater',
                    'label' => 'Banner Left',
                    'item_name' => 'Banner Left',
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
                'banner_right_loop' => [
                    'type' => 'repeater',
                    'label' => 'Banner Right',
                    'item_name' => 'Banner Right',
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

siteorigin_widget_register( 'ggnews-home-banners', __FILE__, 'SiteOrigin_Widget_GGNewsHomeBanners_Widget' );
