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
        </div>
    </div>
</section>