<?php
/*
Widget Name: GGNews Footer Blogs
Description: PhongNT GGNews Footer Blogs
Author: PhongNT
*/

class SiteOrigin_Widget_GGNewsFooterBlogs_Widget extends SiteOrigin_Widget {
    function __construct() {

        parent::__construct(
            'ggnews-footer-blogs',
            'GGNews Footer Blogs',
            array(
                'description' => "",
            ),
            array(),
            array(
                'title' => [
                    'label' => 'Tiêu đề',
                    'type' => 'text'
                ],
                'blog_loop' => [
                    'type' => 'repeater',
                    'label' => 'Danh sách',
                    'item_name' => 'Bài viết',
                    'fields' => [
                        'title' => [
                            'label' => 'Tiêu đề',
                            'type' => 'text'
                        ],
                        'href' => [
                            'label' => 'Đường dẫn',
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

siteorigin_widget_register( 'ggnews-footer-blogs', __FILE__, 'SiteOrigin_Widget_GGNewsFooterBlogs_Widget' );
