<?php if( have_rows('content') ): ?>
    <?php while( have_rows('content') ): the_row(); ?>

        <?php if( get_row_layout() == 'text_width' ): ?>
            <?php get_template_part( 'template-parts/blocks/text_width' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'list' ): ?>
            <?php get_template_part( 'template-parts/blocks/list' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'title_text' ): ?>
            <?php get_template_part( 'template-parts/blocks/title_text' );?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'image' ): ?>
            <?php get_template_part( 'template-parts/blocks/image' );?>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>