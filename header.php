<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
<body <?php body_class(); ?> data-scroll-container>

<?php wp_body_open();?>
<div class="wr">
    <header id="site-header" class="header">
        <div class="header__container">

            <div id="menu" class="header__menu menu">
                <?php if( get_field('logo','option') ): ?>
                    <div class="site_logo" >
                        <a itemprop="url" href="<?php echo get_home_url(); ?>" class="header-logo">
                            <img src="<?php the_field('logo','option'); ?>" alt="site logo">
                        </a>
                    </div>
                <?php endif; ?>
                <nav>

                    <div class="hamburger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                    <?php
                    wp_nav_menu( [
                        'theme_location'  => 'primary-menu',
                        'menu'            => '',
                        'container'       => 'ul',
                        'container_class' => 'menu__body',
                        'container_id'    => '',
                        'menu_class'      => 'nav-links',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'add_li_class'    => 'menu__link',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ] );

                    ?>
                    <?php if( get_field('cta_button_text','option') && get_field('cta_button_link','option') ): ?>
                        <div class="cta_button_header" data-da="nav-links,130,992">
                            <a href="<?php the_field('cta_button_link','option'); ?>">
                                <?php the_field('cta_button_text','option'); ?>
                            </a>
                        </div>
                    <?php endif; ?>


                    <div class="header_lang" data-da="nav-links,131,992">
                        <?php echo do_shortcode('[wpml_language_selector_widget]'); ?>
                    </div>
                </nav>


            </div>

        </div>
    </header>