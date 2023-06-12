<h1><?php echo @$instance['title'] ?></h1>
<hr />
<ul>
    <?php foreach(@$instance['blog_loop'] as $blog): ?>
        <!-- <li><a href="<?php echo $blog['href'] ?>"><?php echo $blog['title'] ?></a></li> -->
        <li><?php echo $blog['title'] ?></li>
    <?php endforeach; ?>
</ul>
