<section  class="cta">
    <div class="cta_block content_width">
        <div class="cta_content">
            <?php if( get_field('cta_title','option') ): ?>
               <div class="cta_title" data-aos="fade-up" data-aos-delay="100">
                  <?php the_field('cta_title','option'); ?>
               </div>
            <?php endif; ?>

            <?php if( get_field('cta_shortcode','option') ): ?>
               <div class="cta_form" data-aos="fade-up" data-aos-delay="200">
                  <?php the_field('cta_shortcode','option'); ?>
               </div>
            <?php endif; ?>
            <div class="cta_logos_mobile">
                <?php if( have_rows('logos_app','option') ): ?>
                    <div class="footer_app_logos">
                        <?php while( have_rows('logos_app','option') ): the_row();  $image = get_sub_field('logo'); ?>
                            <div class="footer_app_logo">
                                <a href="<?php the_sub_field('link'); ?>"><img src="<?php echo $image; ?>" alt="app logo"></a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>