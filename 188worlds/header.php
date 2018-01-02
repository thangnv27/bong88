<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <meta name="keywords" content="<?php echo get_option('keywords_meta') ?>" />
        <meta name="author" content="cacuoc.biz" />
        <meta name="robots" content="index, follow" /> 
        <meta name="googlebot" content="index, follow" />
        <meta name="bingbot" content="index, follow" />
        <meta name="geo.region" content="VN" />
        <meta name="geo.position" content="14.058324;108.277199" />
        <meta name="ICBM" content="14.058324, 108.277199" />

        <!--<meta name="viewport" content="initial-scale=1.0" />-->

        <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />        
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/common.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/wp-default.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/tab.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        
        <style type="text/css">
            #text-2{
                text-align: center;
            }
        </style>

        <script>
            var siteUrl = "<?php bloginfo('siteurl'); ?>";
            var themeUrl = "<?php bloginfo('stylesheet_directory'); ?>";
            var no_image_src = themeUrl + "/images/no_image_available.jpg";
            var is_home = <?php echo is_home() ? 'true' : 'false'; ?>;
            var ajaxurl = siteUrl + '/wp-admin/admin-ajax.php';
        </script>
        <script language="javascript" type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js"></script>

        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->

<?php
if (is_singular())
    wp_enqueue_script('comment-reply');

wp_head();
?>
    </head>
    <body class="home page page-id-65 page-template-default">
        <div id="wrapper" class="hfeed">
            <div id="header">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'topmenu',
                    'menu_class' => '',
                ));
                ?>
                <div id="masthead">
                    <div id="top">
                        <h2 class="site-title mt20"><a href="<?php bloginfo('siteurl'); ?>">
                                <img alt="188Worlds" src="<?php echo get_option("sitelogo"); ?>"/>
                            </a></h2>
                        <div class="login">
                            <a target="_blank" href="<?php echo get_option("banner_top_url"); ?>">
                                <img alt="Register" src="<?php echo get_option("banner_top"); ?>"/>
                            </a>
                        </div>
                    </div>
                    <div id="access" role="navigation">
                        <div class="skip-link screen-reader-text"><a href="#content" title="Skip to content">Skip to content</a></div>
                        <div class="menu-header">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class' => 'menu',
                            ));
                            ?>
                        </div>
                    </div><!-- #access -->
                </div><!-- #masthead -->
            </div><!-- #header -->
            
            <div id="main">