<?php
/*
  Template name: Grid
 */
?>

<?php get_header(); ?>

<div id="container">
    <div id="content" role="main">
        <?php
        $cat_IDs = get_option(SHORT_NAME . "cat_IDs");
        if(!empty($cat_IDs)):
            $cat_IDs = explode(",", $cat_IDs);
            foreach ($cat_IDs as $cat_ID) :
                $category = get_category($cat_ID);
        ?>
        <div class="giaitri">
            <h2><?php echo $category->name; ?></h2>
            <?php
            $loop = new WP_Query(array(
                'post_type' => 'post',
                'cat' => $cat_ID,
            ));
            while($loop->have_posts()) : $loop->the_post();
            ?>
            <div class="item-giaitri">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <img title="<?php the_title(); ?>" alt="<?php the_title(); ?>"
                         src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&w=200&h=170&amp;q=99" 
                         class="thumb" />
                </a>
                <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="link-n"><a href="<?php echo get_category_link($category); ?>">Xem thêm &gt;&gt;</a></div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>