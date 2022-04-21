<?php

/*
Template Name: Hvordan det fungerer
*/

get_header(); ?>

<section class="hdf">
    <div class="hdf_block">
        <div class="hdf_content">
            <?php if( get_field('backround_image') ||  get_field('title')): ?>
               <div class="hdf_baner" style="background-image: url( <?php the_field('backround_image'); ?>)">
                   <div class="hdf_title" data-aos="fade-up" data-aos-delay="100">
                       <?php the_field('title'); ?>
                   </div>
               </div>
            <?php endif; ?>

            <div class="gallery">
                <div class="gallery_block content_width">
                    <div class="gallery_content">
                        <?php if( get_field('gallery_titile') ): ?>
                           <div class="gallery_title" data-aos="fade-up" data-aos-delay="100">
                              <?php the_field('gallery_titile'); ?>
                           </div>
                        <?php endif; ?>
                        <?php if( get_field('gallery_text') ): ?>
                            <div class="gallery_text" data-aos="fade-up" data-aos-delay="200">
                                <?php the_field('gallery_text'); ?>
                            </div>
                        <?php endif; ?>
                        <?php
                        $images = get_field('gallery_images');
                        if( $images ): ?>
                            <div class="gallery_images" data-aos="fade-up" data-aos-delay="300">
                                <ul>
                                    <?php foreach( $images as $image ): ?>
                                        <li>
                                            <a href="<?php echo esc_url($image['url']); ?>">
                                                <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="burgundy">
                <div class="burgundy_block content_width">
                    <div class="burgundy_content">
                        <div class="burgundy_text">
                            <?php if( get_field('burgundy_block_title') ): ?>
                               <div class="burgundy_block_title" data-aos="fade-up" data-aos-delay="100">
                                  <?php the_field('burgundy_block_title'); ?>
                               </div>
                            <?php endif; ?>
                            <?php if( get_field('burgundy_block_text') ): ?>
                               <div class="burgundy_block_text" data-aos="fade-up" data-aos-delay="200">
                                  <?php the_field('burgundy_block_text'); ?>
                               </div>
                            <?php endif; ?>
                        </div>
                        <?php if( get_field('burgundy_block_image') ): ?>
                           <div class="burgundy_img" data-aos="fade-left" data-aos-delay="300">
                               <img src="<?php the_field('burgundy_block_image'); ?>" alt="img">
                           </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/subscribe' );?>

<?php get_footer(); ?>