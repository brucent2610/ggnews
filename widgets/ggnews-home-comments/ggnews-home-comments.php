<?php
/*
Widget Name: GGNews Home Comments
Description: PhongNT GGNews Home Comments
Author: PhongNT
*/

class SiteOrigin_Widget_GGNewsHomeComments_Widget extends SiteOrigin_Widget {
    function __construct() {

        parent::__construct(
            'ggnews-home-comments',
            'GGNews Home Comments',
            array(
                'description' => "",
            ),
            array(),
            array(
                'title' => [
                    'label' => 'Tiêu đề',
                    'type' => 'text'
                ],
                'supplier_loop' => [
                    'type' => 'repeater',
                    'label' => 'Supplier',
                    'item_name' => 'Supplier',
                    'fields' => [
                        'title' => [
                            'label' => 'Tiêu đề',
                            'type' => 'text'
                        ],
                        'company' => [
                            'label' => 'Công ty',
                            'type' => 'text'
                        ],
                        'href' => [
                            'label' => 'Đường dẫn',
                            'type' => 'text'
                        ],
                        'description' => [
                            'label' => 'Review',
                            'type' => 'textarea'
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

siteorigin_widget_register( 'ggnews-home-comments', __FILE__, 'SiteOrigin_Widget_GGNewsHomeComments_Widget' );
