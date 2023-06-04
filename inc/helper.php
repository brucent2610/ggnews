<?php
if(! function_exists("ggnews_breadcrumbs")):
function ggnews_breadcrumbs($arr) {
?>
<div class="breadcrumb-area ptb-10">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li>
                    <a href="<?php echo home_url() ?>">
                        <?php echo __('[:vi]Trang chủ[:vi][:en]Home[:en]') ?>
                    </a>
                </li>
                <?php foreach($arr as $index => $val): ?>
                    <?php if(!empty($val['slug']) && in_array($val['slug'], [
                        'thuong-hieu',
                        'chuc-nang'
                    ])) {
                        continue;
                    }                         
                    ?>
                    <?php if(isset($val['href'])): ?>
                        <li><a class="home" href="<?= $val['href'] ?>" title="<?= $val['title'] ?>"><?= $val['title'] ?></a></li>
                    <?php else: ?>
                        <li class="navigation_page"><a><?= $val['title'] ?></a></li>
                    <?php endif;?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<?php
}
endif;

if(! function_exists('ggnews_pagination')) {
  function ggnews_pagination($pages = '', $range = 1)
  {
      global $wp_query;
      if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
      elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
      else { $paged = 1; }

      $showitems = ($range * 2)+1;

      if(empty($paged)) $paged = 1;

      if($pages == '' && $pages != 0)
      {
          global $wp_query;
          $pages = $wp_query->max_num_pages;
          if(!$pages)
          {
              $pages = 1;
          }
      }

      if(1 != $pages)
      {
          echo "<ul class=\"blog-pagination ptb-20\">";
          if($paged > 1 && $showitems < $pages)
              echo "<li><a class=\"prev\" href='".get_pagenum_link($paged - 1)."'><i class=\"fa fa-angle-left\"></i></a></li>";

          for ($i=1; $i <= $pages; $i++)
          {
              if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
              {
                  echo ($paged == $i)? "<li><a class='active'>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
              }
          }

          if ($paged < $pages && $showitems < $pages)
              echo "<li><a class=\"next\" href='".get_pagenum_link($paged + 1)."'><i class=\"fa fa-angle-right\"></i></a>";
          echo "</ul></div>\n";
      }
  }
}
if(! function_exists('ggnews_product_pagination')) {
    function ggnews_product_pagination($pages = '', $range = 1)
    {
        global $wp_query;
        if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
        elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
        else { $paged = 1; }
  
        $showitems = ($range * 2)+1;
  
        if(empty($paged)) $paged = 1;
  
        if($pages == '' && $pages != 0)
        {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if(!$pages)
            {
                $pages = 1;
            }
        }
  
        if(1 != $pages)
        {
            echo "<ul class=\"list-inline\">";
            if($paged > 1 && $showitems < $pages)
                echo "<li><a class=\"prev\" href='".get_pagenum_link($paged - 1)."'><i class=\"fa fa-angle-left\"></i></a></li>";
  
            for ($i=1; $i <= $pages; $i++)
            {
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                {
                    echo ($paged == $i)? "<li><a class='active'>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
                }
            }
  
            if ($paged < $pages && $showitems < $pages)
                echo "<li><a class=\"next\" href='".get_pagenum_link($paged + 1)."'><i class=\"fa fa-angle-right\"></i></a>";
            echo "</ul>\n";
        }
    }
  }
if(! function_exists("ggnews_menu_sub")):
function ggnews_menu_sub($taxonomy, $current_term_id = 0, $title = "Danh mục") {
    ?>
    <div id="menu-ggnews" class="mt-10">
        <div class="block left-module recent-post mt-10">
            <h3 class="sidebar-title"><?php echo $title ?></h3>
            <div class="block_content">
                <div class="layered layered-category">
                    <div class="layered-content">
                        <ul class="tree-menu curren-term-id-<?= $current_term_id ?>">
                            <?php
                            $categories = get_categories([
                                'taxonomy' => $taxonomy,
                                'parent' => $current_term_id,
                                'orderby' => 'post_date',
                                'order'   => 'ASC',
                                'hide_empty' => false
                            ]);
                            foreach($categories as $category):
                            if($category->slug == 'uncategorized') continue;
                            $childs = get_categories(['taxonomy' => $taxonomy, 'parent' => $category->term_id, 'hide_empty' => false]);
                            ?>
                                <li class="term-id-<?= $category->term_id ?>">
                                    <?php if(count($childs) > 0): ?> <span class="span-tree-1"></span> <?php endif; ?>
                                    <a href="<?= get_term_link($category) ?>" title="<?= $category->name ?>"><?= $category->name ?></a>
                                    <?php if(count($childs) > 0): ?>
                                        <ul <?php if($current_term_id == $category->term_id): ?>style="display: block;" <?php  else: ?> style="display: none;" <?php endif; ?>>
                                            <?php foreach ($childs as $child): ?>
                                            <li>
                                                <a href="<?= get_term_link($child) ?>"><?= $child->name ?></a>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php
                            endforeach;
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- ./layered -->
            </div>
        </div>
    </div>
<?php
}
endif;
if(! function_exists("ggnews_filter_products")):
function ggnews_filter_products($taxonomy, $current_term_id = 0, $title = "Danh mục") {
    ?>
    <div id="menu-ggnews" class="mt-10">
        <div class="block left-module recent-post mt-10 filter">
            <h3 class="sidebar-title"><?php echo $title ?></h3>
            <div class="block_content">
                <div class="layered layered-category">
                    <div class="layered-content">
                        <ul class="tree-menu curren-term-id-<?= $current_term_id ?>">
                            <?php
                            $categories = get_categories([
                                'taxonomy' => $taxonomy,
                                'parent' => $current_term_id,
                                'orderby' => 'post_date',
                                'order'   => 'ASC',
                                'hide_empty' => false
                            ]);
                            foreach($categories as $category):
                            if($category->slug == 'uncategorized') continue;
                            $childs = get_categories(['taxonomy' => $taxonomy, 'parent' => $category->term_id, 'hide_empty' => false]);
                            ?>
                                <li class="term-id-<?= $category->term_id ?>">
                                    <?php if(count($childs) > 0): ?> <span class="span-tree-1"></span> <?php endif; ?>
                                    <input type="checkbox" name="product_brand[]" value="<?= $category->slug ?>">
                                    <a href="javascript:void(0);" title="<?= $category->name ?>"><?= $category->name ?></a>
                                    <?php if(count($childs) > 0): ?>
                                        <ul <?php if($current_term_id == $category->term_id): ?>style="display: block;" <?php  else: ?> style="display: none;" <?php endif; ?>>
                                            <?php foreach ($childs as $child): ?>
                                            <li>
                                                <input type="checkbox" name="product_brand[]" value="<?php echo $child->slug ?>">
                                                <a href="javascript:void(0);"><?= $child->name ?></a>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php
                            endforeach;
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- ./layered -->
            </div>
        </div>
    </div>
<?php
}
endif;