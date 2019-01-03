<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Acrópolis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'acropolis'); ?></a>

    <header id="masthead" class="site-header">

        <div id="top_info">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-2 top_header_info">
                        <i class="fas fa-phone"></i> 2336-0138
                    </div>
                    <div class="col-md-6 top_header_info">
                        <i class="fas fa-map-marker"></i> Jardines de la asuncion, 41 avenida 13 - 98 zona 5
                    </div>
                    <div class="col-md-4 top_header_info">
                        <i class="fas fa-envelope"></i> info@centroeducativoacropolis.com
                    </div>
                </div>
            </div>
        </div>
        <div class="site-branding">
            <div id="logo_main">
                <?php
                the_custom_logo();
                ?>
            </div>
        </div><!-- .site-branding -->
        <div id="main_header" class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu"
                                aria-expanded="false"><?php esc_html_e('Primary Menu', 'acropolis'); ?></button>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'menu_id' => 'primary-menu',
                        ));
                        ?>
                    </nav><!-- #site-navigation -->
                </div>
                <div class="col-md-9">
                    <?php wd_slider(2); ?>
                </div>
            </div>
        </div>


    </header><!-- #masthead -->

    <div id="content" class="site-content">
