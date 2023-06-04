<!-- Company Policy Start -->
<div class="company-policy">
    <div class="container">
        <div class="main-policy">
            <div class="row">
                <!-- Single Policy Start -->
                <?php foreach(@$instance['policy_loop'] as $policy): ?>
                <div class="col-md-3 col-sm-6">
                    <div class="policy-conditions">
                        <div class="single-policy <?php echo @$policy['icon'] ?>">
                            <div class="policy-desc">
                                <h3><strong><?php echo @$policy['title'] ?></strong></h3>
                                <p><?php echo @$policy['description'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
              <?php endforeach; ?>
              <?php unset($policy) ?>
                <!-- Single Policy End -->
            </div>
            <!-- Row End -->
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Company Policy End -->
