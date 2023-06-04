<?php
/*
Widget Name: GGNews Home Policy
Description: PhongNT GGNews Home Policy
Author: PhongNT
*/

class SiteOrigin_Widget_GGNewsHomePolicy_Widget extends SiteOrigin_Widget {
    function __construct() {

        parent::__construct(
            'ggnews-home-policy',
            'GGNews Home Policy',
            array(
                'description' => "",
            ),
            array(),
            array(
                'title' => [
                    'label' => 'Tiêu đề',
                    'type' => 'text'
                ],
                'policy_loop' => [
                    'type' => 'repeater',
                    'label' => 'Policy',
                    'item_name' => 'Policy',
                    'fields' => [
                        'title' => [
                            'label' => 'Tiêu đề',
                            'type' => 'text'
                        ],
                        'description' => [
                            'label' => 'Mô tả',
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

siteorigin_widget_register( 'ggnews-home-policy', __FILE__, 'SiteOrigin_Widget_GGNewsHomePolicy_Widget' );
