<?php




get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
        <div class="single_container">
            <div class="main">
                <div class="post content">
                    <div class="post_single_title" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0">
                        <?php the_title();?>
                    </div>
                    <div class="top_post_date" data-aos="fade-up" data-aos-delay="250" data-aos-offset="0">UPDATES <span></span> <?php echo get_the_date('F j, Y');?></div>
                    <div class="post_single_img" data-aos="fade-up" data-aos-delay="300" data-aos-offset="0">
                        <img src="<?php the_post_thumbnail_url();?>" alt="">
                    </div>

                    <div class="post_content" data-aos="fade-up" data-aos-delay="350" data-aos-offset="0">
                        <?php the_content(); ?>


                        <div class="share" data-aos="fade-up" data-aos-delay="400" data-aos-offset="0">
                            <div class="share_title">Share:</div>
                            <div class="links">
                                <ul>
                                    <li class="social-share facebook">Facebook</li>
                                    <li class="social-share twitter">Twitter</li>
                                    <li class="social-share linkedin">Linkedin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="related_post content_width">
                        <div class="related_post_title" data-aos="fade-up" data-aos-delay="450" data-aos-offset="0">
                            Related In "<?php $category = get_the_category();
                            $firstCategory = $category[0]->cat_name; echo $firstCategory;?>"
                        </div>
                        <div class="blog-post-list" data-aos="fade-up" data-aos-delay="500" data-aos-offset="0">
                            <?php

                            $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
                            if( $related ) foreach( $related as $post ) {
                                setup_postdata($post); ?>
                                <?php get_template_part('template-parts/postitem');?>
                            <?php }
                            wp_reset_postdata(); ?>
                        </div>
                    </div>



                </div>
            </div>
        </div>
<?php endwhile; ?>



<?php

get_footer();