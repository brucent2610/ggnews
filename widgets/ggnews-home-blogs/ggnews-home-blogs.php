<?php
/*
Widget Name: GGNews Home Blogs
Description: PhongNT GGNews Home Blogs
Author: PhongNT
*/

class SiteOrigin_Widget_GGNewsHomeBlogs_Widget extends SiteOrigin_Widget {
    function __construct() {

        parent::__construct(
            'ggnews-home-blogs',
            'GGNews Home Blogs',
            array(
                'description' => "",
            ),
            array(),
            array(
                'title' => [
                    'label' => 'Tiêu đề',
                    'type' => 'text'
                ],
                'blog_ids' => [
                    'label' => 'Mã bài viết',
                    'type' => 'text'
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

siteorigin_widget_register( 'ggnews-home-blogs', __FILE__, 'SiteOrigin_Widget_GGNewsHomeBlogs_Widget' );
