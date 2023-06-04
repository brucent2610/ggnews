<ul class="footer-link-list">
    <?php foreach(@$instance['tags_loop'] as $tag): ?>
    <li>
        <span class="title"><?php echo $tag['title'] ?></span>
        <?php
            $last_key = end(array_keys(@$tag['subtags_loop']));
        ?>
        <?php foreach(@$tag['subtags_loop'] as $key => $sub_tag): ?>
          <?php if ($key == $last_key) { ?>
              <a href="<?php echo ci_get_tag_links($sub_tag['title']) ?>"><?php echo $sub_tag['title'] ?></a>
          <?php } else { ?>
              <a href="<?php echo ci_get_tag_links($sub_tag['title']) ?>"><?php echo $sub_tag['title'] ?></a> /
          <?php } ?>
        <?php endforeach; ?>
    </li>
    <?php endforeach; ?>
</ul>
