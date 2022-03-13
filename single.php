<?php

add_action('wp_enqueue_scripts', 'template_page_enqueue_styles');
function template_page_enqueue_styles()
{
    wp_enqueue_style('blog', get_template_directory_uri() . '/assets/css/blog.css', array(), '1.0');
}


get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
        <div class="single_container">
            <div class="main">
                <div class="post content">

                    <div class="post_single_img" style="background-image: url(<?php the_post_thumbnail_url();?>)">
                        <div class="post_single_title content_width" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0">
                            <?php the_title();?>
                        </div>
                    </div>
                    <div class="post_content" data-aos="fade-up" data-aos-delay="350" data-aos-offset="0">
                        <div class="post_blocks content_width">
                            <?php get_template_part( 'template-parts/content' );?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php endwhile; ?>


<?php get_template_part( 'template-parts/subscribe' );?>

<?php

get_footer();