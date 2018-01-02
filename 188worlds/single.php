<?php get_header(); ?>

<div id="container">
    <div id="content" role="main">
        <?php while(have_posts()) : the_post();  ?>
        <div id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?> page type-page status-publish hentry">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="entry-meta"><span class="meta-prep meta-prep-author">Posted on</span> 
                <a rel="bookmark" title="<?php the_time(); ?>" href="<?php the_permalink(); ?>">
                    <span class="entry-date"><?php the_date(); ?></span>
                </a> 
                <span class="meta-sep">by</span> 
                <span class="author vcard"><?php the_author_posts_link(); ?></span>
            </div>
            <div class="news_share">
                <?php show_share_socials(); ?>
            </div>
            <div class="entry-content">
                <?php the_content(); ?>
                
                <div class="sharedaddy sd-sharing-enabled">
                    <div class="robots-nocontent sd-block sd-social sd-social-official sd-sharing">
                        <h3 class="sd-title font12">Chia sẻ:</h3>
                        <?php show_share_socials(); ?>
                    </div>
                </div>
                <p class="tags"><?php the_tags("Tags: "); ?></p>
            </div><!-- .entry-content -->
            <div class="fb-comments" data-href="<?php echo getCurrentRquestUrl(); ?>" data-width="100%" data-num-posts="10" data-colorscheme="dark"></div>
        </div><!-- #post-## -->
        
        <div class="relatedpost">
            <h3>Bài Viết Liên Quan</h3>
            <ul>
                <?php
                $categories = get_the_category();
                $cat = array();
                foreach ($categories as $category) {
                    array_push($cat, $category->term_id);
                }
                $excludeID = array(get_the_ID());
                $args = array(
                    'post_type' => 'post',
                    'post__not_in' => $excludeID,
                    'posts_per_page' => 4,
                    //'orderby' => 'rand',
                    //'category__in' => $cat,
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <img title="<?php the_title(); ?>" alt="<?php the_title(); ?>" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&w=150&h=100&amp;q=99" class="thumb"/>
                    </a>
                    <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                </li>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>    
            </ul>
        </div>
        <div class="relatedpost">
            <h3>Bài Viết Cùng Chuyên Mục</h3>
            <ul>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post__not_in' => $excludeID,
                    'posts_per_page' => 4,
                    //'orderby' => 'rand',
                    'category__in' => $cat,
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <img title="<?php the_title(); ?>" alt="<?php the_title(); ?>" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&w=150&h=100&amp;q=99" class="thumb"/>
                    </a>
                    <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                </li>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>   
            </ul>
        </div>
        <?php endwhile; ?>
    </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>