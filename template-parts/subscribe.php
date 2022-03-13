<section  class="cta">
    <div class="cta_block content_width">
        <div class="cta_content">
            <?php if( get_field('cta_title','option') ): ?>
               <div class="cta_title">
                  <?php the_field('cta_title','option'); ?>
               </div>
            <?php endif; ?>

            <?php if( get_field('cta_shortcode','option') ): ?>
               <div class="cta_form">
                  <?php the_field('cta_shortcode','option'); ?>
               </div>
            <?php endif; ?>
        </div>
    </div>
</section>