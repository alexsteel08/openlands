<?php

/*
Template Name: About us
*/

get_header(); ?>

<section class="about">
    <div class="about_block ">
        <div class="about_content">
            <?php if( get_field('top_text') ): ?>
               <div class="top_text content_width" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0">
                  <?php the_field('top_text'); ?>
               </div>
            <?php endif; ?>

            <div class="about_wrapper">
                <div class="about_img" data-da="text_block,1,992">
                    <div class="about_img_wrapper">
                        <div class="about_img_square"></div>
                        <?php if( get_field('image_1') && get_field('name_image_1') ): ?>
                            <div class="about_img_first" data-aos="fade-up" data-aos-delay="150" data-aos-offset="0">
                                <img src="<?php the_field('image_1'); ?>" alt="">
                                <span><?php the_field('name_image_1'); ?></span>
                            </div>
                        <?php endif; ?>
                        <?php if( get_field('image_2') && get_field('name_image_2') ): ?>
                            <div class="about_img_first" data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                                <img src="<?php the_field('image_2'); ?>" alt="">
                                <span><?php the_field('name_image_2'); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="about_info content_width">
                    <div class="about_text">
                        <?php if( get_field('about_title') ): ?>
                            <div class="about_title" data-aos="fade-up" data-aos-delay="250" data-aos-offset="0">
                                <?php the_field('about_title'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if( have_rows('text_block') ): ?>
                            <div class="text_block" data-aos="fade-up" data-aos-delay="300" data-aos-offset="0">
                                <?php while( have_rows('text_block') ): the_row();?>
                                    <div class="text_block_item">
                                        <div class="text_block_title"><?php the_sub_field('title'); ?></div>
                                        <div class="text_block_text"><?php the_sub_field('text'); ?></div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="about_cards_wrapper content_width">
                <?php if( get_field('cards_title') ): ?>
                    <div class="cards_title" data-aos="fade-up" data-aos-delay="100" data-aos-offset="0">
                        <?php the_field('cards_title'); ?>
                    </div>
                <?php endif; ?>

                <?php if( have_rows('about_cards') ): ?>
                    <div class="about_cards " data-aos="fade-up" data-aos-delay="200" data-aos-offset="0">
                        <?php while( have_rows('about_cards') ): the_row(); ?>
                            <div class="about_card">
                                <div class="about_card_content">
                                    <div class="about_card_title"><?php the_sub_field('title'); ?></div>
                                    <div class="about_card_text"><?php the_sub_field('text'); ?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>