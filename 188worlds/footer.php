    </div><!-- #main -->

    <div id="footer" role="contentinfo">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footermenu',
            'menu_class' => '',
        ));
        ?>
        <div id="colophon">
            <div id="site-info">
                <?php echo stripslashes(get_option(SHORT_NAME . "_footertext")); ?>
            </div><!-- #site-info -->
        </div><!-- #colophon -->
    </div><!-- #footer -->

</div><!-- #wrapper -->

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/app.js"></script>
<?php wp_footer(); ?>
</body>
</html>