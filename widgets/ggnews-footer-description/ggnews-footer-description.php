<?php
/*
Widget Name: GGNews Footer Description
Description: PhongNT GGNews Footer Description
Author: PhongNT
*/

class SiteOrigin_Widget_GGNewsFooterDescription_Widget extends SiteOrigin_Widget {
    function __construct() {

        parent::__construct(
            'ggnews-footer-description',
            'GGNews Footer Description',
            array(
                'description' => "",
            ),
            array(),
            array(
                'title' => [
                    'label' => 'Tiêu đề',
                    'type' => 'text'
                ],
                'description' => [
                    'label' => 'Mô tả',
                    'type' => 'text'
                ],
                'company' => [
                    'label' => 'Tên công ty',
                    'type' => 'text'
                ],
                'city' => [
                    'label' => 'Khu vực',
                    'type' => 'text'
                ],
                'address' => [
                    'label' => 'Địa chỉ',
                    'type' => 'text'
                ],
                'hotline' => [
                    'label' => 'Số điện thoại',
                    'type' => 'text'
                ],
                'email' => [
                    'label' => 'Email',
                    'type' => 'text'
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

siteorigin_widget_register( 'ggnews-footer-description', __FILE__, 'SiteOrigin_Widget_GGNewsFooterDescription_Widget' );
