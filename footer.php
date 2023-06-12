</main>
<footer class="footer-main">
    <div class="wrapper">
        <div class="footer-container">
            <div class="col-1">
                <!-- <h1>thông tin liên hệ</h1>
                <hr /> -->
                <?php if ( is_active_sidebar( 'footer_column_1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer_column_1' ); ?>
                <?php endif; ?>
                <!-- <p>Chúng tôi luôn sẵn sàng tư vấn Quý đối tác có nhu cầu gia công các phần mềm đa cấp, vui lòng liên hệ</p>
                <div class="hightlight-text">Công Ty TNHH global hitech and media</div>
                <p>Gia công phần mềm đa cấp tại TpHCM</p>
                <p>Địa chỉ: số 360c Bến Vân Đồn, Phường 1, Quận 4, Thành phố Hồ Chí Minh</p>
                <p>Hotline: 0962564886</p>
                <p>Email: globalhitechmedia.info@gmail.com</p> -->
            </div>
            <div class="col-1">
                <!-- <h1>dịch vụ</h1>
                <hr /> -->
                <?php if ( is_active_sidebar( 'footer_column_2' ) ) : ?>
                    <?php dynamic_sidebar( 'footer_column_2' ); ?>
                <?php endif; ?>
                <!-- <ul>
                    <li>Lập trình phần mềm đa cấp</li>
                    <li>Thiết kế website</li>
                    <li>Lập trình blockchain</li>
                    <li>Ứng dụng di động</li>
                    <li>Dịch vụ SEO</li>
                    <li>Phần mềm ERP</li>
                    <li>Giải pháp Server</li>
                </ul> -->
            </div>
            <div class="col-1">
                <!-- <h1>giải pháp công nghệ</h1>
                <hr /> -->
                <?php if ( is_active_sidebar( 'footer_column_3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer_column_3' ); ?>
                <?php endif; ?>
                <!-- <ul>
                    <li>Giải pháp tar thưởng đa cấp</li>
                    <li>Giải pháp sàn thương mại điện tử</li>
                    <li>Giải pháp blockchain</li>
                    <li>Giải pháp sàn giao dịch tài chính</li>
                    <li>Giải pháp giáo dục thường xuyên</li>
                    <li>Giải pháp mạng xã hội</li>
                    <li>Giải pháp Microsite</li>
                    <li>Các giải pháp khác theo đặc trưng ngành</li>
                </ul> -->
            </div>
            <div class="col-2">
                <!-- <h1>Ứng dụng di động</h1> -->
                <?php if ( is_active_sidebar( 'footer_column_4' ) ) : ?>
                    <?php dynamic_sidebar( 'footer_column_4' ); ?>
                <?php endif; ?>
                <!-- <ul>
                    <li>Mobile Web</li>
                    <li>Ứng dụng IOS</li>
                    <li>Ứng dụng Android</li>
                </ul> -->
                <!-- <h1 style="margin-top: 15px">Phần mềm ERP</h1> -->
                <br>
                <?php if ( is_active_sidebar( 'footer_column_5' ) ) : ?>
                    <?php dynamic_sidebar( 'footer_column_5' ); ?>
                <?php endif; ?>
                <!-- <ul>
                    <li>Tư vấn giải pháp ERP</li>
                    <li>Phát triển chức năng ERP</li>
                    <li>Hướng dẫn đào tạo ERP</li>
                    <li>Giải pháp ERP</li>
                </ul> -->
                <!-- <h1 style="margin-top: 15px">Dịch vụ SEO</h1> -->
                <br>
                <?php if ( is_active_sidebar( 'footer_column_6' ) ) : ?>
                    <?php dynamic_sidebar( 'footer_column_6' ); ?>
                <?php endif; ?>
                <!-- <ul>
                    <li>Tư vấn web chuẩn SEO</li>
                    <li>Dịch vụ SEO top Google</li>
                    <li>Đăng ký web sàn TMĐT</li>
                    <li>Đăng ký web Bộ Công Thương</li>
                </ul> -->
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo get_template_directory_uri() ?>/media/js/vendor/jquery-1.12.4.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
