<?php

/*
Template Name: Openlands manifesto
*/

get_header(); ?>
<section class="team">
    <div class="team_block ">
        <div class="team_content">
            <div class="bg-video-wrap" style="background: url(<?php if( get_field('backround_image') ): ?><?php the_field('backround_image'); ?><?php endif; ?>) no-repeat center center/cover;">
                <video src="<?php $file = get_field('backround_video'); if( $file ): ?><?php echo $file['url']; ?> <?php endif; ?>" loop muted autoplay>
                </video>
                <div class="overlay"></div>
                <h1 class="team_title"><?php the_field('title'); ?></h1>
            </div>
<!--            <section class="black_logos">-->
<!--                <div class="black_logos_block content_width">-->
<!--                    <div class="black_logos_content">-->
<!--                        --><?php //if( have_rows('logos') ): ?>
<!--                            <div class="logos" data-aos="fade-up" data-aos-delay="200">-->
<!--                                --><?php //while( have_rows('logos') ): the_row();  $image = get_sub_field('image'); ?>
<!--                                    <div class="logo">-->
<!--                                        <img src="--><?php //echo $image; ?><!--" alt="img">-->
<!--                                    </div>-->
<!--                                --><?php //endwhile; ?>
<!--                            </div>-->
<!--                        --><?php //endif; ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->
            <section class="manifesto manifesto_page">
                <div class="manifesto_block content_width">
                    <div class="manifesto_content">
                        <?php if( get_field('manifesto_title') ): ?>
                            <div class="manifesto_title" data-aos="fade-up" data-aos-delay="100">
                                <?php the_field('manifesto_title'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="manifesto_words" data-aos="fade-up" data-aos-delay="200">
                            <?php if( get_field('line_1') ): ?>
                                <div class="manifesto_line_1 scale--js">
                                    <?php the_field('line_1'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( get_field('line_2') ): ?>
                                <div class="manifesto_line_2 scale--js">
                                    <?php the_field('line_2'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( get_field('line_3') ): ?>
                                <div class="manifesto_line_3 scale--js">
                                    <?php the_field('line_3'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( get_field('line_4') ): ?>
                                <div class="manifesto_line_4 scale--js">
                                    <?php the_field('line_4'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( get_field('line_5') ): ?>
                                <div class="manifesto_line_5 scale--js">
                                    <?php the_field('line_5'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( get_field('line_6') ): ?>
                                <div class="manifesto_line_6 scale--js">
                                    <?php the_field('line_6'); ?>
                                </div>
                            <?php endif; ?>


                            <?php if( get_field('manifesto_text') ): ?>
                                <div class="manifesto_text">
                                    <?php the_field('manifesto_text'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php if( get_field('full_width_image') ): ?>
               <section class="fwi">
                   <img src="<?php the_field('full_width_image'); ?>" alt="img">
               </section>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/subscribe' );?>

<?php get_footer(); ?>