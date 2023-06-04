<!-- Signup-Newsletter End -->
<footer class="black-o-bg">
        <!-- Footer Top Start -->
        <div class="footer-top ptb-25">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Start -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <?php if ( is_active_sidebar( 'footer_column_1' ) ) : ?>
                            <?php dynamic_sidebar( 'footer_column_1' ); ?>
                        <?php endif; ?>
                        <div class="bocongthuong">
                            <img width="150" src="<?php echo get_template_directory_uri() ?>/media/img/dathongbao_bct.png">
                        </div>
                    </div>
                    <!-- Single Footer Start -->
                    <!-- Single Footer Start -->
                    <div class="col-md-2 col-sm-4 col-xs-6 footer-full">
                      <?php if ( is_active_sidebar( 'footer_column_2' ) ) : ?>
                          <?php dynamic_sidebar( 'footer_column_2' ); ?>
                      <?php endif; ?>
                    </div>
                    <!-- Single Footer Start -->
                    <!-- Single Footer Start -->
                    <div class="col-md-2 col-sm-4 col-xs-6 footer-full">
                      <?php if ( is_active_sidebar( 'footer_column_3' ) ) : ?>
                          <?php dynamic_sidebar( 'footer_column_3' ); ?>
                      <?php endif; ?>
                    </div>
                    <!-- Single Footer Start -->
                    <!-- Single Footer Start -->
                    <div class="col-md-2 col-sm-4 col-xs-6 footer-full">
                      <?php if ( is_active_sidebar( 'footer_column_4' ) ) : ?>
                          <?php dynamic_sidebar( 'footer_column_4' ); ?>
                      <?php endif; ?>
                    </div>
                    <!-- Single Footer Start -->
                    <!-- Single Footer Start -->
                    <div class="col-md-2 col-sm-4 col-xs-6 footer-full">
                      <?php if ( is_active_sidebar( 'footer_column_5' ) ) : ?>
                          <?php dynamic_sidebar( 'footer_column_5' ); ?>
                      <?php endif; ?>
                    </div>
                    <!-- Single Footer Start -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Footer Top End -->
        <!-- Footer Middle Start -->
            <div class="footer-middle">
                <div class="container">
                    <div class="footer-middle-content ptb-10">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Footer Link Start -->
                                <div class="footer-link">
                                    <?php if ( is_active_sidebar( 'footer_tags' ) ) : ?>
                                        <?php dynamic_sidebar( 'footer_tags' ); ?>
                                    <?php endif; ?>
                                </div>
                                <!-- Footer Link End -->
                            </div>
                        </div>
                        <!-- Row End -->
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Middle End -->
        <!-- Footer Bottom Start -->
        <div class="footer-bottom ptb-25">
            <div class="container">
                <div class="footer-bottom-content">
                    <p class="pull-left pt-10"></p>
                    <div class="footer-social-content pull-left">
                      <?php if ( is_active_sidebar( 'footer_social' ) ) : ?>
                          <?php dynamic_sidebar( 'footer_social' ); ?>
                      <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!-- Footer End -->
</div>
<script src="<?php echo get_template_directory_uri() ?>/media/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/media/js/jquery.meanmenu.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/media/js/jquery.scrollUp.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/media/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/media/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/media/js/jquery.countdown.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/media/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/media/js/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/media/js/jquery.nivo.slider.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/media/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/media/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/media/js/main.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/media/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>
