<?php get_header(); ?>

<div id="container">
    <div id="content" role="main">
        <h1 class="entry-title font20 mb15" style="border-bottom: 1px solid #ccc"><?php echo single_cat_title(); ?></h1>
        
        <?php while(have_posts()) : the_post();  ?>
        <div class="cat">
            <div class="post-<?php the_ID(); ?> post type-post status-publish format-standard has-post-thumbnail hentry category-mach-nuoc-world-cup tag-argentina tag-duc"
                 id="post-<?php the_ID(); ?>">
                <div class="cat-left">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <img title="<?php the_title(); ?>" alt="<?php the_title(); ?>"
                             src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&w=200&h=170&amp;q=99"
                             class="thumb">
                    </a>
                </div>
                <div class="cat-right">
                    <h2 class="entry-title"><a rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-meta"> <span class="meta-prep meta-prep-author">Posted on</span> 
                        <a rel="bookmark" title="<?php the_time(); ?>" href="<?php the_permalink(); ?>">
                            <span class="entry-date"><?php the_time('F jS, Y'); ?></span>
                        </a> <span class="meta-sep">by</span>  <span class="author vcard"><?php the_author_posts_link(); ?></span>
                    </div>
                    <!-- .entry-meta -->
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>
                    <!-- .entry-summary -->
                </div>
            </div>
            <!-- #post-## -->
        </div>
        <?php endwhile; ?>
        <?php if(function_exists('getpagenavi')){ getpagenavi(); } ?>
    </div><!-- #content -->
</div><!-- #container -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>