<!DOCTYPE html>
<html lang="en">
<?php
    global $woocommerce;
    $cart = WC()->cart;
    $ggnews_options = get_option('theme_ggnews_options');
    $item_count = $cart->get_cart_contents_count();
?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php wp_title() ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="description" content="Default Description">
    <meta name="keywords" content="E-commerce" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo !empty($ggnews_options['favicon']) ? $ggnews_options['favicon'] : null ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/ggnews/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/ggnews/font/fontawesome-free-6.4.0-web/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/css/meanmenu.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/css/nivo-slider.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/css/owl.carousel.min.css">
   	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/css/default.css"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/css/home-3.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/custom.css">
    <?php wp_head(); ?>
</head>
    <?php if ( is_front_page() ) : ?>
    <body style="background-color: #F7F7F7;">
        <header class="header">
    <?php else : ?>
    <body class="body-product-page">
        <header class="header-product-page">
    <?php endif; ?>
        <!-- banner style  -->
        <div class="banner">
            <!-- top header  -->
            <div id="top_header">
                <div class="wrapper">
                    <div class="header-container">
                        <div id="logo_top">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">GG NEWS</a>
                            <a href=""><img class="icons" src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/facebook(1).png" alt="fb" /></a>
                            <a href="">
                                <img class="icons" src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/instagram(2).png" alt="ins" />
                            </a>
                            <a href="">
                                <img class="icons" src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/twitter(2).png" alt="ins" />
                            </a>
                        </div>
                        <div class="header-action">
                            <!-- <button style="cursor: pointer">
                                <a href="#" class="btn-action">
                                    <img src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/edit(1).png" alt="dang ky" />
                                    <p>Đăng Ký</p>
                                </a>

                            </button> -->
                            <button style="cursor: pointer">
                                <a href="<?php echo esc_url( home_url( '/login' ) ); ?>" class="btn-action">
                                    <img src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/enter(3).png" alt="dang nhap" />
                                    <p>Đăng Nhập</p>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="header-container-mobile">
                    <div class="logo-mobile">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">GG NEWS</a>
                        <a href=""><img class="icons" src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/facebook(1).png" alt="fb" /></a>
                        <a href="">
                            <img class="icons" src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/instagram(2).png" alt="ins" />
                        </a>
                        <a href="">
                            <img class="icons" src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/twitter(2).png" alt="ins" />
                        </a>
                    </div>
                    <div class="action-mobile">
                        <button><a href=""><i class="fa-solid fa-pen-to-square"></i> Đăng Ký</a></button>
                        <button>
                            <a href=""><i class=" fa-solid fa-right-to-bracket"></i>Đăng Nhập</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="top-banner">
                <form class="searchbar" id="ggnews-search-form">
                    <input type="hidden" name="post_type[]" value="product" />
                    <input type="search" name="s" placeholder="<?php echo __('Tìm Kiếm') ?>">
                    <img onclick="document.getElementById('ggnews-search-form').submit();" src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/magnifier(1).png" alt="search" />
                </form>
                <div class="cart-container">
                    <a href="<?php echo esc_url( home_url( '/cart/' ) ); ?>">
                        <img class="cart-icon" src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/shopping-cart(2).png" alt="cart" />
                        <span>
                            <?php echo $item_count ?>
                        </span>
                    </a>
                    <span>
                        <?php echo $item_count ?>
                    </span>
                </div>
            </div>
            <div class="nav-bar">
                <div class="main-logo">
                    <img src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/logo GGnews.png" alt="logo" />
                </div>
                <!-- <div class="main-nav"> -->
                <ul class="main-nav">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">trang chủ</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/gioi-thieu' ) ); ?>">giới thiệu</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/danh-muc-san-pham/san-pham-noi-bat' ) ); ?>">sản phẩm</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/danh-muc/tin-tuc/' ) ); ?>">tin tức</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/lien-he' ) ); ?>">liên hệ</a></li>
                </ul>
                <ul class="mobile-nav">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa-solid fa-house"></i></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/gioi-thieu' ) ); ?>"><i class="fa-solid fa-circle-info"></i></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/danh-muc-san-pham/san-pham-noi-bat' ) ); ?>"><i class="fa-solid fa-store"></i> </a></li>
                    <li><a href="<?php echo esc_url( home_url( '/danh-muc/tin-tuc/' ) ); ?>"><i class="fa-solid fa-newspaper"></i></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/lien-he' ) ); ?>"><i class="fa-solid fa-phone"></i></a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="main-container">
