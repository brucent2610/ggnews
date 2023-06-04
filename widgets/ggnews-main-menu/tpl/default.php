<nav>
    <ul class="vertical-menu-list <?php if(is_front_page()): ?> home <?php endif; ?>">
        <?php foreach (@$instance['menu_lv1_loop'] as $menu_lv1) { ?>
            <li>
                <a href="<?php echo @$menu_lv1['href'] ?>" class="<?php echo !empty($menu_lv1['menu_lv2_loop'][0]['title']) ? 'submenu': '' ?>"><?php echo @$menu_lv1['title'] ?></a>              
                <?php if(!empty($menu_lv1['menu_lv2_loop'][0]['title'])): ?>
                <!-- Vertical Mega-Menu Start -->
                <ul class="ht-dropdown megamenu">
                    <!-- Mega-Menu Three Column Start -->
                    <li class="megamenu-three-column fix">
                        <ul>
                            <?php foreach (@$menu_lv1['menu_lv2_loop'] as $menu_lv2) { ?>
                            <!-- Single Column Start -->
                            <li>
                                <h3><a href="<?php echo @$menu_lv2['href'] ?>"><?php echo @$menu_lv2['title'] ?></a></h3>
                                <?php if(!empty($menu_lv2['menu_lv3_loop'][0]['title'])): ?>
                                <ul>
                                    <?php foreach (@$menu_lv2['menu_lv3_loop'] as $menu_lv3) { ?>
                                        <li><a href="<?php echo @$menu_lv3['href'] ?>"><?php echo @$menu_lv3['title'] ?></a></li>
                                    <?php } ?>
                                </ul>
                              <?php endif; ?>
                            </li>
                            <!-- Single Column End -->
                            <?php } ?>
                        </ul>
                    </li>
                    <!-- Mega-Menu Three Column End -->
                </ul>
                <!-- Vertical Mega-Menu End -->
                <?php endif; ?>
            </li>
        <?php } ?>
    </ul>
</nav>
