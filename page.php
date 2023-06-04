<?php get_header() ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post();?>
		<?php if(siteorigin_panels_render()): ?>
        <?php the_content(); ?>
		<?php else: ?>
		<?php global $post; ?>
        
		<?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>
