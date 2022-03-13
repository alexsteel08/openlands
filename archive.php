<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


add_action('wp_enqueue_scripts', 'template_page_enqueue_styles');
function template_page_enqueue_styles()
{
    wp_enqueue_style('single', get_template_directory_uri() . '/assets/css/blocks/cta.css', array(), '1.0');
}


get_header(); ?>
    <div id="primary">
        <div id="content" role="main">
            <div class="blog_page">
                <div class="content_width">
                    <div class="blog_title" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0">
                        <?php if (is_category()) echo get_queried_object()->name; ?>
                    </div>
                    <div class="blog_category_list" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                        <ul>
                            <li><a href="/blog/">All topics</a></li>
                            <?php
                            $categories = get_categories(array(
                                'orderby' => 'name',
                                'order' => 'ASC',
                                'hide_empty'   => 0,
                            ));
                            foreach( $categories as $category ){
                                echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li> ';
                            }
                            ?>
                        </ul>

                    </div>

                    <div class="blog_post_archive">
                        <div class="blog-post-list" data-aos="fade-up" data-aos-delay="300" data-aos-offset="0">
                            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $cat_name = get_queried_object()->name;
                            $cat_id = get_cat_ID($cat_name);
                            $new_loop = new WP_Query(array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 6,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'category',
                                            'field' => 'id',
                                            'terms' => $cat_id,
                                        ),
                                    ),
                                    'paged' => $paged)

                            );
                            ?>
                            <?php if ($new_loop->have_posts()) : ?>
                                <?php while ($new_loop->have_posts()) : $new_loop->the_post(); ?>

                                    <?php get_template_part('template-parts/postitem');?>


                                <?php endwhile; ?>
                                <div class="loadmore-block">
                                    <?php
                                    global $wp_query;
                                    if ($wp_query->max_num_pages > 1) : ?>
                                        <script>
                                            var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                                            var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                                            var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                                            var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                                        </script>

                                        <div id="true_loadmore">OLDER POSTS</div>
                                    <?php endif; ?>
                                </div>


                            <?php else: ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_template_part( 'template-parts/subscribe' );?>



<?php get_footer(); ?>