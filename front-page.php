<?php

/*
Template Name: Front Page
*/

get_header(); ?>

<div class="content">

    <section class="baner" <?php if( get_field('baner_bi') ): ?> style="background-image: url(<?php the_field('baner_bi'); ?>)"<?php endif; ?>>
        <div class="baner_block content_width">
            <div class="baner_content" data-aos="fade-up">
                <?php if( get_field('baner_title') ): ?>
                   <div class="baner_title"  data-aos="fade-up" data-aos-delay="200">
                      <?php the_field('baner_title'); ?>
                   </div>
                <?php endif; ?>
                <?php if( get_field('baner_descr') ): ?>
                    <div class="baner_descr" data-aos="fade-up" data-aos-delay="250">
                        <?php the_field('baner_descr'); ?>
                    </div>
                <?php endif; ?>
                <?php if( get_field('baner_form') ): ?>
                   <div class="baner_form" data-aos="fade-up" data-aos-delay="300">
                      <?php the_field('baner_form'); ?>
                   </div>
                <?php endif; ?>

                <?php if( have_rows('baner_apps') ): ?>
                    <div class="baner_apps_title"  data-aos="fade-up" data-aos-delay="350">Mobile App:</div>
                    <div class="baner_apps"  data-aos="fade-up" data-aos-delay="400">

                        <?php while( have_rows('baner_apps') ): the_row();  $image = get_sub_field('apps_logo'); ?>
                            <div class="baner_app">
                                <a href="<?php the_sub_field('store_link'); ?>">
                                    <img src="<?php echo $image; ?>" alt="app logo">
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>


            </div>
        </div>
    </section>
    <section class="green_phone">
        <div class="green_phone_block">
            <div class="green_phone_content" data-da="green_phone_block,4,768">

                <?php if( get_field('gp_left_image') && get_field('gp_left_title') && get_field('gp_left_link') ): ?>
                    <div class="green_phone_left" data-da="green_phone_block,2,768">
                           <div class="gp_left active_left">
                               <a id="leftside" href="<?php the_field('gp_left_link'); ?>">
                                   <img src="<?php the_field('gp_left_image'); ?>" alt="img">
                                   <span><?php the_field('gp_left_title'); ?></span>
                               </a>
                           </div>
                    </div>
                <?php endif; ?>

                <div class="green_phone_center">
                    <div class="gp_center">
                        <?php if( get_field('gp_left_image_hover') ): ?>
                           <div class="gp_center_img gp_left_image_hover active_left" data-da="green_phone,0,768">
                               <img data-aos="fade-up" data-aos-delay="100" src="<?php the_field('gp_left_image_hover'); ?>" alt="img">
                           </div>
                        <?php endif; ?>
                        <?php if( get_field('gp_center_image') ): ?>
                            <div class="gp_center_img" data-da="green_phone,0,768">
                                <img data-aos="fade-up" data-aos-delay="100" src="<?php the_field('gp_center_image'); ?>" alt="img">
                            </div>
                        <?php endif; ?>
                        <?php if( get_field('gp_right_image_hover') ): ?>
                            <div class="gp_center_img gp_right_image_hover" data-da="green_phone,0,768">
                                <img data-aos="fade-up" data-aos-delay="100" src="<?php the_field('gp_right_image_hover'); ?>" alt="img">
                            </div>
                        <?php endif; ?>
                        <?php if( have_rows('gp_left_list') ): ?>
                            <div class="gp_center_list gp_left_list active_left">
                                <?php while( have_rows('gp_left_list') ): the_row(); ?>
                                    <div class="gp_center_item" data-aos="fade-up" data-aos-delay="<?php echo get_row_index(); ?>00">
                                        <?php the_sub_field('item'); ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        <?php if( have_rows('gp_right_list') ): ?>
                            <div class="gp_center_list gp_right_list">
                                <?php while( have_rows('gp_right_list') ): the_row(); ?>
                                    <div class="gp_center_item" data-aos="fade-up" data-aos-delay="<?php echo get_row_index(); ?>00">
                                        <?php the_sub_field('item'); ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if( get_field('gp_right_image') && get_field('gp_right_title') && get_field('gp_right_link')): ?>
                    <div class="green_phone_right"  data-da="green_phone_block,3,768" data-aos="fade-up" data-aos-delay="100">
                        <div class="gp_right">
                            <a id="rightside" href="<?php the_field('gp_right_link'); ?>">
                                <img src="<?php the_field('gp_right_image'); ?>" alt="img">
                                <span><?php the_field('gp_right_title'); ?></span>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <div class="sticky_tabs_padtop active"></div>
    <div class="sticky_tabs_block">
        <section class="sticky_tabs wrapper">

            <div class="tab_content">
                <div class="tab_item hunter">
                    <div class="hunter_block content_width">
                        <div class="hunter_content">

                            <?php if( get_field('hunter_name') ): ?>
                                <div class="hunter_name" data-aos="fade-up" data-aos-delay="100">
                                    <?php the_field('hunter_name'); ?>
                                </div>
                            <?php endif; ?>

                            <div class="hunter_top" data-aos="fade-up" data-aos-delay="200">
                                <?php if( get_field('hunter_title') ): ?>
                                    <div class="hunter_title">
                                        <?php the_field('hunter_title'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if( get_field('hunter_image') ): ?>
                                    <div class="hunter_image">
                                        <img src="<?php the_field('hunter_image'); ?>" alt="img">
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="hunter_wrapper">
                                <?php if( have_rows('hunter_list') ): ?>
                                    <div class="hunter_list">
                                        <?php while( have_rows('hunter_list') ): the_row(); ?>
                                            <div class="hunter_list_item" data-aos="fade-up" data-aos-delay="<?php echo get_row_index(); ?>00">
                                                <?php the_sub_field('text'); ?>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>

                                <div class="hunter_app">
                                    <div class="hunter_pay">
                                        <?php if( get_field('hunter_pay_img') ): ?>
                                            <div class="hunter_pay_img">
                                                <img data-aos="fade-up" data-aos-delay="100" src="<?php the_field('hunter_pay_img'); ?>" alt="img">
                                            </div>
                                        <?php endif; ?>
                                        <?php if( have_rows('hunter_pay_list') ): ?>
                                            <div class="hunter_pay_list">
                                                <?php while( have_rows('hunter_pay_list') ): the_row();?>
                                                    <div class="hunter_pay_item" data-aos="fade-up" data-aos-delay="<?php echo get_row_index(); ?>00">
                                                        <?php the_sub_field('text'); ?>
                                                    </div>
                                                <?php endwhile; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php if( get_field('hunter_screan') ): ?>
                                        <div class="hunter_screan">
                                            <img data-aos="fade-up" data-aos-delay="100" src="<?php the_field('hunter_screan'); ?>" alt="img">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php if( have_rows('landejer_hiw') ): ?>
                            <div class="landejer_hiw">
                                <?php while( have_rows('landejer_hiw') ): the_row();  $image = get_sub_field('logo'); ?>
                                    <div class="landejer_hiw_item">
                                        <div class="landejer_hiw_num"><?php the_sub_field('number'); ?></div>
                                        <div class="landejer_hiw_text_img">
                                            <div class="landejer_hiw_text"><?php the_sub_field('text'); ?></div>
                                            <div class="landejer_hiw_img"><img src="<?php echo $image; ?>" alt="logo"></div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="tab_item landejer">
                    <div class="landejer_block content_width">
                        <div class="landejer_content">
                            <?php if( get_field('landejer_name') ): ?>
                                <div class="landejer_name" data-aos="fade-up" data-aos-delay="100">
                                    <?php the_field('landejer_name'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="landejer_top" data-aos="fade-up" data-aos-delay="200">
                                <?php if( get_field('landejer_title') ): ?>
                                    <div class="landejer_title">
                                        <?php the_field('landejer_title'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if( get_field('landejer_image') ): ?>
                                    <div class="landejer_image">
                                        <img src="<?php the_field('landejer_image'); ?>" alt="img">
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="landejer_app">
                                <div class="landejer_app_content">
                                    <?php if( get_field('landejer_phone') ): ?>
                                        <div class="landejer_phone">
                                            <img data-aos="fade-up" data-aos-delay="250" src="<?php the_field('landejer_phone'); ?>" alt="img">
                                        </div>
                                    <?php endif; ?>
                                    <div class="landejer_app_info">
                                        <?php if( have_rows('landejer_rated') ): ?>

                                            <div class="landejer_rated">
                                                <?php if( get_field('landejer_app_title') ): ?>
                                                    <div class="landejer_app_title">
                                                        <?php the_field('landejer_app_title'); ?>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="landejer_rated_list">
                                                    <?php while( have_rows('landejer_rated') ): the_row();  $image = get_sub_field('logo'); ?>
                                                        <div class="landejer_rated_item" data-aos="fade-up" data-aos-delay="<?php echo get_row_index(); ?>00">
                                                            <div class="landejer_rated_logo">
                                                                <img src="<?php echo $image; ?>" alt="logo">
                                                            </div>
                                                            <div class="landejer_rated_title"><?php the_sub_field('landejer_rated_title'); ?></div>
                                                        </div>
                                                    <?php endwhile; ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if( have_rows('landejer_indtjening') ): ?>
                                            <div class="landejer_indtjening">
                                                <?php if( get_field('landejer_indtjening_title') ): ?>
                                                    <div class="landejer_indtjening_title" data-aos="fade-up" data-aos-delay="300">
                                                        <?php the_field('landejer_indtjening_title'); ?>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="landejer_indtjening_list" data-aos="fade-up" data-aos-delay="350">
                                                    <?php while( have_rows('landejer_indtjening') ): the_row(); ?>
                                                        <div class="landejer_indtjening_item" >
                                                            <div class="landejer_indtjening_info" style="color:<?php the_sub_field('text_color'); ?>/*/*; height: */*/<?php the_sub_field('height_colum'); ?>/*/*px; background-color: */*/<?php the_sub_field('landejer_indtjening_bg'); ?> ">
                                                                <?php the_sub_field('landejer_indtjening_info'); ?>
                                                            </div>
                                                        </div>
                                                    <?php endwhile; ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if( have_rows('landejer_app_list') ): ?>
                                    <div class="landejer_app_list">
                                        <?php while( have_rows('landejer_app_list') ): the_row(); ?>
                                            <div class="landejer_app_item" data-aos="fade-up" data-aos-delay="<?php echo get_row_index(); ?>00">
                                                <?php the_sub_field('landejer_app_item'); ?>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                        <?php if( have_rows('hunter_hiw') ): ?>
                            <div class="landejer_hiw">
                                <?php while( have_rows('hunter_hiw') ): the_row();  $image = get_sub_field('logo'); ?>
                                    <div class="landejer_hiw_item">
                                        <div class="landejer_hiw_num"><?php the_sub_field('number'); ?></div>
                                        <div class="landejer_hiw_text_img">
                                            <div class="landejer_hiw_text"><?php the_sub_field('text'); ?></div>
                                            <div class="landejer_hiw_img"><img src="<?php echo $image; ?>" alt="logo"></div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="sticky tabs">
                <span class="tab">Jæger <img src="/wp-content/uploads/2022/04/Jaeger.svg" alt="Jæger"></span>
                <span class="tab">Landejer <img src="/wp-content/uploads/2022/04/Landejer.svg" alt="Jæger"></span>
            </div>
        </section>

    </div>
    <div class="sticky_tabs_padding active">

    </div>

    <section class="black_logos">
        <div class="black_logos_block content_width">
            <div class="black_logos_content">
                <?php if( get_field('back_logos_title') ): ?>
                    <div class="black_logos_title" data-aos="fade-up" data-aos-delay="100">
                        <?php the_field('back_logos_title'); ?>
                    </div>
                <?php endif; ?>
                <?php if( have_rows('back_logos_slider') ): ?>
                    <div class="black_logos_slider" data-aos="fade-up" data-aos-delay="200">
                        <?php while( have_rows('back_logos_slider') ): the_row();  $image = get_sub_field('image'); ?>
                            <div class="black_logo" style="background-image: url(<?php echo $image; ?>)">
<!--                                <img src="--><?php //echo $image; ?><!-- " alt="img">-->
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="partnerships_logos">
        <div class="partnerships_logos_block content_width">
            <div class="partnerships_logos_content">
                <?php if( get_field('partnerships_logos_title') ): ?>
                    <div class="partnerships_logos_title" data-aos="fade-up" data-aos-delay="100">
                        <?php the_field('partnerships_logos_title'); ?>
                    </div>
                <?php endif; ?>
                <?php if( have_rows('partnerships_logos_slider') ): ?>
                    <div class="partnerships_logos_slider" data-aos="fade-up" data-aos-delay="200">
                        <?php while( have_rows('partnerships_logos_slider') ): the_row();  $image = get_sub_field('image'); ?>
                            <div class="partnerships_logo" style="background-image: url( <?php echo $image; ?>)">
<!--                                <img src="--><?php //echo $image; ?><!--" alt="img">-->
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="manifesto">
        <div class="manifesto_block content_width">
            <div class="manifesto_content">

                <?php if ( get_field( 'field_name' ) ||  get_field('manifesto_title')): ?>

                    <div class="manifesto_title" data-aos="fade-up" data-aos-delay="100">
                        <a href="<?php the_field('manifesto_title_link'); ?>"><?php the_field('manifesto_title'); ?></a>
                    </div>

                <?php else: ?>

                    <div class="manifesto_title" data-aos="fade-up" data-aos-delay="100">
                        <?php the_field('manifesto_title'); ?>
                    </div>

                <?php endif; // end of if field_name logic ?>

                <div class="manifesto_words" data-aos="fade-up" data-aos-delay="200">
                    <?php if( get_field('line_2') ): ?>
                        <div class="manifesto_line_2">
                            <?php the_field('line_2'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="location">
        <div class="location_block content_width">
            <div class="location_content">
                <?php if( get_field('landejer_name') ): ?>
                   <div class="location_name" data-aos="fade-up" data-aos-delay="100">
                      <?php the_field('landejer_name'); ?>
                   </div>
                <?php endif; ?>



                <?php if( have_rows('landejer_list') ): ?>
                    <div class="location_slides" data-aos="fade-up" data-aos-delay="200">
                        <?php while( have_rows('landejer_list') ): the_row();  $image_big = get_sub_field('image_big'); $image_small = get_sub_field('image_small');?>
                            <div class="location_slide">
                                <div class="location_slide_wrapper">
                                    <div class="location_slide_meta">
                                        <div class="location_slide_title"><?php the_sub_field('title'); ?></div>
                                        <div class="location_slide_info">
                                            <div class="location_slide_name"><?php the_sub_field('name'); ?></div>
                                            <div class="location_slide_geo"><?php the_sub_field('location'); ?></div>
                                            <div class="location_slide_text"><?php the_sub_field('text'); ?></div>
                                        </div>
                                    </div>
                                    <div class="location_slide_images">
                                        <div class="location_slide_bi"><img src="<?php echo $image_big; ?>" alt=""></div>
                                        <div class="location_slide_si"><img src="<?php echo $image_small; ?>" alt=""></div>
                                    </div>

                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <section class="video">
        <div class="video_block content_width">
            <div class="video_content">
                <?php if( get_field('video_title') ): ?>
                   <div class="video_title" data-aos="fade-up" data-aos-delay="100">
                      <?php the_field('video_title'); ?>
                   </div>
                <?php endif; ?>
                <div class="video_wrapper" data-aos="fade-up" data-aos-delay="200">
                    <video class="video_item" poster="<?php if( get_field('video_preview') ): ?><?php the_field('video_preview'); ?><?php endif; ?>">
                        <?php
                        $file = get_field('video_link');
                        if( $file ): ?>
                        <source src="<?php echo $file['url']; ?>" type="video/mp4" />
                        <?php endif; ?>
                    </video>
                    <div class="playpause"></div>
                </div>

            </div>
        </div>
    </section>
    <section class="hit">
        <div class="hit_block content_width">
            <div class="hit_content">
                <?php if( get_field('how_it_work_title') ): ?>
                   <div class="hit_name" data-aos="fade-up" data-aos-delay="100">
                      <?php the_field('how_it_work_title'); ?>
                   </div>
                <?php endif; ?>
            </div>

            <?php if( have_rows('hit_list') ): ?>
                <div class="hit_list">
                    <?php while( have_rows('hit_list') ): the_row();  $image = get_sub_field('image'); ?>
                        <div class="hit_item" data-aos="fade-up" data-aos-delay="<?php echo get_row_index(); ?>00">
                            <div class="hit_item_content">
                                <div class="hit_image">
                                    <img src="<?php echo $image; ?>" alt="img">
                                </div>
                                <div class="hit_title"><?php the_sub_field('title'); ?></div>
                                <div class="hit_text"><?php the_sub_field('text'); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="dk">
        <div class="dk_block content_width">
            <div class="dk_content">
                <?php if( get_field('dk_title') ): ?>
                   <div class="dk_title" data-aos="fade-up" data-aos-delay="100">
                      <?php the_field('dk_title'); ?>
                   </div>
                <?php endif; ?>

                <?php
                $featured_posts = get_field('dk_post');
                if( $featured_posts ): ?>
                    <div class="dk_post">
                        <?php foreach( $featured_posts as $post ):
                            setup_postdata($post); ?>
                            <div class="dk_post_item">
                                <div class="dk_post_content">
                                    <div class="dk_post_meta">
                                        <div class="dk_post_date"><?php echo get_the_date('F j - H:i A'); ?></div>
                                        <div class="dk_post_excerpt"><?php the_excerpt();?></div>
                                    </div>
                                    <div class="dk_post_image">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                </div>
                                <div class="dk_post_read">
                                    <a href="<?php the_permalink(); ?>">Læs indlæg</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php get_template_part( 'template-parts/subscribe' );?>
</div>
<?php get_footer(); ?>