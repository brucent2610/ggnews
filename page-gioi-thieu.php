<?php get_header() ?>
<?php while ( have_posts() ) : the_post(); ?>
<!-- Breadcrumb Start -->
<?php
$category = get_the_category();
ggnews_breadcrumbs([
    [
        "title" => get_the_title()
    ]
]);
?>
<!-- Breadcrumb End -->
<!-- Blog Area Start -->
<div class="blog-area pb-50">
    <div class="container">
        <div class="row">
            <!-- Main Blog Start -->
            <div class="col-md-12 col-sm-12">
                <!-- Blog Details Start -->
                <div class="blog-details">
                    <h3 class="semi-title"><?php the_title() ?></h3>
                    <div class="content-blog">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Blog Area End -->
<?php endwhile; ?>
<?php get_footer() ?>
