<div class="single-footer">
    <h3 class="footer-title"><?php echo @$instance['title'] ?></h3>
    <div class="footer-content">
        <ul class="footer-list">
            <?php foreach(@$instance['blog_loop'] as $blog): ?>
              <li><a href="<?php echo $blog['href'] ?>"><?php echo $blog['title'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
