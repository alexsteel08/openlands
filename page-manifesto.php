<?php

/*
Template Name: Openlands manifesto
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
                                <div class="manifesto_line_1">
                                    <?php the_field('line_1'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( get_field('line_2') ): ?>
                                <div class="manifesto_line_2">
                                    <?php the_field('line_2'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( get_field('line_3') ): ?>
                                <div class="manifesto_line_3">
                                    <?php the_field('line_3'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( get_field('line_4') ): ?>
                                <div class="manifesto_line_4">
                                    <?php the_field('line_4'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( get_field('line_5') ): ?>
                                <div class="manifesto_line_5">
                                    <?php the_field('line_5'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( get_field('line_6') ): ?>
                                <div class="manifesto_line_6">
                                    <?php the_field('line_6'); ?>
                                </div>
                            <?php endif; ?>
                        </div>

<!--                        --><?php
//                        $images = get_field('gallery_images');
//                        if( $images ): ?>
<!--                            <div class="gallery_images gallery_manifesto" data-aos="fade-up" data-aos-delay="100">-->
<!--                                <ul>-->
<!--                                    --><?php //foreach( $images as $image ): ?>
<!--                                        <li>-->
<!--                                            <a href="--><?php //echo esc_url($image['url']); ?><!--">-->
<!--                                                <img src="--><?php //echo esc_url($image['sizes']['large']); ?><!--" alt="--><?php //echo esc_attr($image['alt']); ?><!--" />-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                    --><?php //endforeach; ?>
<!--                                </ul>-->
<!--                            </div>-->
<!--                        --><?php //endif; ?>
                    </div>
                </div>
            </section>
            <?php if( get_field('full_width_image') ): ?>
               <section class="fwi">
                   <img src="<?php the_field('full_width_image'); ?>" alt="img">
               </section>
            <?php endif; ?>
            <section class="black_logos">
                <div class="black_logos_block content_width">
                    <div class="black_logos_content">
                        <?php if( have_rows('logos') ): ?>
                            <div class="logos" data-aos="fade-up" data-aos-delay="200">
                                <?php while( have_rows('logos') ): the_row();  $image = get_sub_field('image'); ?>
                                    <div class="logo">
                                        <img src="<?php echo $image; ?>" alt="img">
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/subscribe' );?>

<?php get_footer(); ?>