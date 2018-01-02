<?php
/*
  Template name: Full Width
 */
?>

<?php get_header(); ?>

<div id="container">
    <div id="page">
        <?php while (have_posts()) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?> page type-page status-publish hentry">
                <div class="entry-page">
                    <?php the_content(); ?>

                    <?php if (!is_home()): ?>
                        <div class="sharedaddy sd-sharing-enabled">
                            <div class="robots-nocontent sd-block sd-social sd-social-official sd-sharing">
                                <h3 class="sd-title">Chia sẻ:</h3>
                                <?php show_share_socials(); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div><!-- .entry-content -->
            </div><!-- #post-## -->
        <?php endwhile; ?>
    </div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>