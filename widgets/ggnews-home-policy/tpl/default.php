<div class=" wrapper">
    <div class="category-list">
        <?php foreach(@$instance['policy_loop'] as $policy): ?>
        <div class="category-item">
            <img src="<?php echo get_template_directory_uri() ?>/media/ggnews/images/<?php echo @$policy['icon'] ?>" alt="ca-item" />
            <div>
                <h1><?php echo @$policy['title'] ?></h1>
                <p><?php echo @$policy['description'] ?></p>
            </div>
        </div>
        <?php endforeach; ?>
        <?php unset($policy) ?>
    </div>
</div>