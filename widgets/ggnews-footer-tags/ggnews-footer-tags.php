<?php
/*
Widget Name: GGNews Footer Tags
Description: PhongNT GGNews Footer Tags
Author: PhongNT
*/

class SiteOrigin_Widget_GGNewsFooterTags_Widget extends SiteOrigin_Widget {
    function __construct() {

        parent::__construct(
            'ggnews-footer-tags',
            'GGNews Footer Tags',
            array(
                'description' => "",
            ),
            array(),
            array(
                'title' => [
                    'label' => 'Tiêu đề',
                    'type' => 'text'
                ],
                'tags_loop' => [
                    'type' => 'repeater',
                    'label' => 'Tags',
                    'item_name' => 'Tag',
                    'fields' => [
                        'title' => [
                            'label' => 'Tiêu đề',
                            'type' => 'text'
                        ],
                        'href' => [
                            'label' => 'Đường dẫn',
                            'type' => 'text'
                        ],
                        'subtags_loop' => [
                            'type' => 'repeater',
                            'label' => 'Tags con',
                            'item_name' => 'Tag',
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

siteorigin_widget_register( 'ggnews-footer-tags', __FILE__, 'SiteOrigin_Widget_GGNewsFooterTags_Widget' );
