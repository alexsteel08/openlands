<?php

/*
Template Name: About us
*/

get_header(); ?>

<section class="team">
    <div class="team_block ">
        <div class="team_content">
            <?php if( get_field('backround_image') ||  get_field('title')): ?>
               <div class="team_baner" style="background-image: url( <?php the_field('backround_image'); ?>)">
                   <div class="team_title" data-aos="fade-up" data-aos-delay="100">
                       <?php the_field('title'); ?>
                   </div>
               </div>
            <?php endif; ?>


            <?php if( get_field('text') ): ?>
                <div class="team_text_block" data-aos="fade-up" data-aos-delay="100">
                    <div class="team_text content_width">
                        <?php the_field('text'); ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if( get_field('our_mission') || get_field('our_mission_text') || get_field('image') ): ?>
               <div class="mission">
                   <div class="mission_block content_width">
                       <div class="mission_content">
                           <div class="mission_text">
                               <div class="our_mission_title" data-aos="fade-up" data-aos-delay="100"><?php the_field('our_mission'); ?></div>
                               <div class="our_mission_text" data-aos="fade-up" data-aos-delay="200"><?php the_field('our_mission_text'); ?></div>
                           </div>
                           <div class="mission_img" data-aos="fade-left" data-aos-delay="300">
                               <img src="<?php the_field('image'); ?>" alt="logo">
                           </div>
                       </div>
                   </div>
               </div>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/subscribe' );?>

<?php get_footer(); ?>