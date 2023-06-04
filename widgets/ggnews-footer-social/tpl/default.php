<ul class="social-content-list">
    <?php foreach(@$instance['social_loop'] as $policy): ?>
      <li><a href="<?php echo @$policy['href'] ?>"><i class="<?php echo @$policy['icon'] ?>"></i></a></li>
    <?php endforeach; ?>
</ul>
