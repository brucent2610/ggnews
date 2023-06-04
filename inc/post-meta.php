<?php
add_filter( 'rwmb_meta_boxes', 'ggnews_meta_boxes_posts' );
add_filter( 'rwmb_meta_boxes', 'ggnews_meta_boxes_products' );

function ggnews_meta_boxes_posts( $meta_boxes )
{
    $prefix = 'ggnews_';

    $meta_boxes[] = array(
        'title'      => 'Top banner',
        'post_types' => 'post',
        'fields'     => array(
            array(
                'id'               => $prefix . '_post_top_banner',
                'name'             => 'Hình',
                'type'             => 'image_advanced',
                'force_delete'     => false,
                'max_file_uploads' => 1,
                'max_status'       => 'false',
                'image_size'       => 'thumbnail',
            )
        ),
    );

    return $meta_boxes;
}


function ggnews_meta_boxes_products( $meta_boxes )
{
    $prefix = 'ggnews_';

    $meta_boxes[] = array(
        'title'      => 'Cấu hình',
        'post_types' => 'product',
        'fields'     => array(
            array(
                'name' => 'Sản phẩm nổi bật',
                'id'   =>  $prefix . '_product_hot',
                'type' => 'checkbox',
                'std'  => 0, // 0 or 1
            )
        ),
       
    );

    return $meta_boxes;
}
