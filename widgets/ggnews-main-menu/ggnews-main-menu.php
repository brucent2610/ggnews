<?php
/*
Widget Name: GGNews Main Menu
Description: PhongNT GGNews Main Menu
Author: PhongNT
*/

class SiteOrigin_Widget_GGNewsMainMenu_Widget extends SiteOrigin_Widget {
    function __construct() {

        parent::__construct(
            'ggnews-main-menu',
            'GGNews Main Menu',
            array(
                'description' => "",
            ),
            array(),
            array(
                'title' => [
                    'label' => 'Tiêu đề',
                    'type' => 'text'
                ],
                'menu_lv1_loop' => [
                    'type' => 'repeater',
                    'label' => 'Menu Lv1',
                    'item_name' => 'Menu',
                    'fields' => [
                        'title' => [
                            'label' => 'Tiêu đề',
                            'type' => 'text'
                        ],
                        'href' => [
                            'label' => 'Đường dẫn',
                            'type' => 'text'
                        ],
                        'menu_lv2_loop' => [
                            'type' => 'repeater',
                            'label' => 'Menu Lv2',
                            'item_name' => 'Menu',
                            'fields' => [
                                'title' => [
                                    'label' => 'Tiêu đề',
                                    'type' => 'text'
                                ],
                                'href' => [
                                    'label' => 'Đường dẫn',
                                    'type' => 'text'
                                ],
                                'menu_lv3_loop' => [
                                    'type' => 'repeater',
                                    'label' => 'Menu Lv3',
                                    'item_name' => 'Menu',
                                    'fields' => [
                                        'title' => [
                                            'label' => 'Tiêu đề',
                                            'type' => 'text'
                                        ],
                                        'href' => [
                                            'label' => 'Đường dẫn',
                                            'type' => 'text'
                                        ],
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ),
            plugin_dir_path(__FILE__)
        );
    }
    function get_template_name( $instance ) {
        // if($instance['layout'])
        //     return $instance['layout'];

        return 'default';
    }
}

siteorigin_widget_register( 'ggnews-main-menu', __FILE__, 'SiteOrigin_Widget_GGNewsMainMenu_Widget' );
