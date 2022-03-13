<?php if( get_sub_field('title_text_title') || get_sub_field('text') ): ?>
    <div class="title_text">
        <div class="title_text_title">
            <?php the_sub_field('title_text_title'); ?>
        </div>
        <div class="title_text_text">
            <?php the_sub_field('text'); ?>
        </div>
    </div>
<?php endif; ?>