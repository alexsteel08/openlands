<?php
/*
 *	ENQUEUE SCRIPTS AND STYLES
 *
 *****************************************************/

add_action('wp_enqueue_scripts', 'theme_front_end_styles');
    function theme_front_end_styles()
{
    wp_enqueue_style('aos', WTHEME_CSS_URI . 'aos.css', array(), false, 'all');
    wp_enqueue_style('nice-select', WTHEME_CSS_URI . 'nice-select.css', array(), false, 'all');
    wp_enqueue_style('slick-style', WTHEME_CSS_URI . 'slick-style.css', array(), false, 'all');
    wp_enqueue_style('header', WTHEME_CSS_URI . 'header.css', array(), false, 'all');
    wp_enqueue_style('footer', WTHEME_CSS_URI . 'footer.css', array(), false, 'all');
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'theme_front_end_script');
    function theme_front_end_script()
{
    wp_enqueue_script('jquery.nice-select', WTHEME_JS_URI . 'jquery.nice-select.min.js', array('jquery'), '', true);
    wp_enqueue_script('slick', WTHEME_JS_URI . 'slick.min.js', array('jquery'), '', true);
    wp_enqueue_script('main', WTHEME_JS_URI . 'main.js', array('jquery'), '', true);

}

