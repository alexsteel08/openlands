<?php if( get_sub_field('list_title') ): ?>
    <div class="list_title">
        <?php the_sub_field('list_title'); ?>
    </div>
<?php endif; ?>
<?php if( have_rows('list') ): ?>
    <div class="list_items">
        <?php while( have_rows('list') ): the_row(); ?>
            <div class="list_item">
                <?php the_sub_field('text'); ?>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
