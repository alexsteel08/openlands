<div class="blog_post_item">
    <div class="blog_item_single">
        <div class="blog_item_img">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </a>
        </div>

        <div class="meta_info">
            <div class="blog_item_title"><a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a></div>
            <div class="post_date"><span><?php echo get_the_date('F j, Y'); ?></span></div>
        </div>

    </div>
</div>