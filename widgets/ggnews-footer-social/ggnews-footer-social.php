<?php
/*
Widget Name: GGNews Footer Social
Description: PhongNT GGNews Footer Social
Author: PhongNT
*/

class SiteOrigin_Widget_GGNewsFooterSocial_Widget extends SiteOrigin_Widget {
    function __construct() {

        parent::__construct(
            'ggnews-footer-social',
            'GGNews Footer Social',
            array(
                'description' => "",
            ),
            array(),
            array(
                'title' => [
                    'label' => 'Tiêu đề',
                    'type' => 'text'
                ],
                'social_loop' => [
                    'type' => 'repeater',
                    'label' => 'Social',
                    'item_name' => 'Social',
                    'fields' => [
                        'title' => [
                            'label' => 'Tiêu đề',
                            'type' => 'text'
                        ],
                        'href' => [
                            'label' => 'Đường dẫn',
                            'type' => 'text'
                        ],
                        'icon' => [
                            'label' => 'Icon class',
                            'type' => 'text'
                        ]
                    ]
                ]
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

siteorigin_widget_register( 'ggnews-footer-social', __FILE__, 'SiteOrigin_Widget_GGNewsFooterSocial_Widget' );
