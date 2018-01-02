<?php
/*
  Template name: Homepage
 */
?>

<?php get_header(); ?>

<div id="container">
    <div id="content" role="main">
        <?php while(have_posts()) : the_post();  ?>
        <div id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?> page type-page status-publish hentry">
            <h1 style="position: absolute;top: -9999px;"><?php the_title(); ?></h1>

            <div class="entry-content">
                <?php the_content(); ?>
            </div><!-- .entry-content -->
        </div><!-- #post-## -->
        <?php endwhile; ?>
    </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>