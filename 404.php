<?php get_header() ?>
<!-- Error 404 Area Start -->
<div class="error404-area pb-50 pt-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-wrapper text-center">
                    <div class="error-text">
                        <h1>404</h1>
                        <h2>Opps! PAGE NOT BE FOUND</h2>
                        <p>Sorry but the page you are looking for does not exist, have been removed, name changed or is temporarity unavailable.</p>
                    </div>
                    <div class="search-error">
                        <form id="search-form" action="#">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="error-button">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to home page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Error 404 Area End -->
<?php get_footer() ?>
