<!DOCTYPE html>
<html lang="en">
<?php
	global $woocommerce;
	$ggnews_options = get_option('theme_ggnews_options');
?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php wp_title() ?></title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="description" content="Default Description">
    <meta name="keywords" content="E-commerce" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo !empty($ggnews_options['favicon']) ? $kibath_options['favicon'] : null ?>">
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/css/default.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/css/home-3.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/css/responsive.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/media/custom.css">
    <script src="<?php echo get_template_directory_uri() ?>/media/js/vendor/modernizr-2.8.3.min.js"></script>
		<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">
    <!-- Header Area Start -->
    <header>
        <!-- Header Top Start -->
        <div class="header-top off-white-bg">
            <div class="container">
                <!-- Header Top left Start -->
                <div class="header-top-left f-left">
                    <ul class="header-list-menu language">
                        <!-- Language Start -->
                        <li>
                            <?php $currentLang = !empty($GLOBALS['q_config']['language']) ? $GLOBALS['q_config']['language'] : 'vi'; ?>
                            <a href="javascript:void(0);">
                                <?php echo $currentLang == 'en' ? 'English' : 'Việt Nam'; ?>
                            <i class="fa fa-angle-down"></i></a>
                            <ul class="ht-dropdown">
                                <li><a href="/en">English</a></li>
                                <li><a href="/vi">Việt Nam</a></li>
                            </ul>
                        </li>
                        <!-- Language End -->
                    </ul>
                    <!-- Header-list-menu End -->
                </div>
                <!-- Header Top left End -->
                <!-- Header Top Right Start -->
                <div class="header-top-right f-right">
                    <ul class="header-list-menu right-menu">
                        <li class="hidden-xs">
                            <span>
                                <i class="fa fa-calendar"></i>                                 
                                <?php echo __('[:vi]Thời gian làm việc: 8:00 - 17:00 (Thứ 2 - Thứ 6)[:vi][:en]Working time: 8:00 - 17:00 (Monday - Friday)[:en]') ?>
                            </span>
                        </li>
					    <li class="hidden-xs"><span><i class="fa fa-email"></i>Email: info@eventservices.vn</span></li>
                    </ul>
                    <!-- Header-list-menu End -->
                </div>
                <!-- Header Top Right End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Header Top End -->
        <!-- Header Middle Start -->
        <div class="header-middle-three header-middle white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 hidden-xs">
                        <!-- Logo Start -->
                        <div class="logo-style-two logo home-custom">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $ggnews_options['logo'] ?>" alt="logo-image"></a>
                        </div>
                        <!-- Logo End -->
                    </div>
                    <div class="col-md-6 col-sm-6">
                         <div class="search-box-style-three search-box-view fix">
                            <form>
                                <input type="hidden" name="post_type[]" value="product" />
                                <input type="text" class="email" name="s" placeholder="<?php echo __('[:vi]Tìm sản phẩm bạn mong muốn[:vi][:en]Search products you want[:en]') ?>">
                                <button type="submit" class="submit"></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="cart-style-two cart-box text-center">
                            <p class="hotline"><strong><i class="fa fa-phone"></i>  0961 350 391</strong><p>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Header Middle End -->
        <!-- Header Bottom Start -->
        <div class="home-3 header-bottom black-bg header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 visible-xs full-col">
                        <!-- Logo Start -->
                        <div class="logo mt-10">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $ggnews_options['logo'] ?>" alt="logo-image"></a>
                        </div>
                        <!-- Logo End -->
                    </div>
                    <!-- Primary Vertical-Menu Start -->
                    <div class="col-md-3 col-sm-4 hidden-xs">
                        <a class="sticky-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $ggnews_options['logo'] ?>" alt=""></a>
                        <div class="vertical-menu mt-10">
                            <span class="categorie-title">
                                <?php echo __('[:vi]Danh mục[:vi][:en]Categories[:en]') ?>
                            </span>
                            <?php if ( is_active_sidebar( 'main_menu' ) ) : ?>
                                    <?php dynamic_sidebar( 'main_menu' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- Primary Vertical-Menu End -->
                    <!-- Mobile Menu  Start -->
                    <div class="col-xs-12 visible-xs">
                        <div class="mobile-menu mobile-menu-three ">
                            <nav>
                                <?php
                                wp_nav_menu([
                                    'container'      => '',
                                    'menu_class'     => '',
                                    'theme_location' => '',
                                    'depth'          => 2,
                                    'walker'         => new My_Custom_Nav_Walker()
                                ]);
                                ?>
                            </nav>
                        </div>
                    </div>
                    <!-- Mobile Menu  End -->
                    <div class="col-md-9">
                        <!-- Header Middle Menu Start -->
                        <div class="middle-menu hidden-xs">
                            <nav>
                                <?php
                                wp_nav_menu([
                                    'container'      => '',
                                    'menu_class'     => 'menu-styel-three middle-menu-list',
                                    'theme_location' => '',
                                    'depth'          => 2,
                                    'walker'         => new My_Custom_Nav_Walker()
                                ]);
                                ?>
                            </nav>
                        </div>
                        <div class="cart-style-two cart-box text-center menu-fixed">
                            <p class="hotline"><strong><i class="fa fa-phone"></i>  0961 350 391</strong></p><p>
                        </p></div>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Header Bottom End -->
    </header>
    <main class="main">
