<?php
/*
Widget Name: GGNews Contact
Description: PhongNT GGnews Contact
Author: PhongNT
*/

class SiteOrigin_Widget_GGNewsContact_Widget extends SiteOrigin_Widget {
    function __construct() {

        parent::__construct(
            'ggnews-contact',
            'GGNews Contact',
            array(
                'description' => "",
            ),
            array(),
            array(
                'title' => [
                    'label' => 'Tiêu đề',
                    'type' => 'text'
                ],
                'lat' => [
                    'label' => 'Lat',
                    'type' => 'text'
                ],
                'long' => [
                    'label' => 'Long',
                    'type' => 'text'
                ],
                'title_infomation' => [
                    'label' => 'Tiêu đề thông tin',
                    'type' => 'text'
                ],
                'address_infomation' => [
                    'label' => 'Địa chỉ thông tin',
                    'type' => 'text'
                ],
                'company_infomation' => [
                    'label' => 'Công ty thông tin',
                    'type' => 'text'
                ],
                'phone_infomation' => [
                    'label' => 'Số điện thoại thông tin',
                    'type' => 'text'
                ],
                'contact' => [
                    'label' => 'Contact Form',
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

siteorigin_widget_register( 'o-contact', __FILE__, 'SiteOrigin_Widget_GGNewsContact_Widget' );
