<footer id="site-footer">
    <div class="footer_block content_width">
        <div class="footer_rows">
            <?php if( get_field('footer_logo','option') ): ?>
                <div class="footer_logo">
                    <img src="<?php the_field('footer_logo','option'); ?>" alt="logo">
                </div>
            <?php endif; ?>


            <div class="footer_row">
                <div class="footer_col">
                    <?php if( have_rows('social_links','option') ): ?>
                        <div class="footer_social_links">
                            <?php while( have_rows('social_links','option') ): the_row();  $image = get_sub_field('logo'); ?>
                                <div class="footer_social_link">
                                    <a href="<?php the_sub_field('link'); ?>"><img src="<?php echo $image; ?>" alt=""><?php the_sub_field('text'); ?></a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="footer_col">
                    <?php if( get_field('subscribe_title','option') ): ?>
                       <div class="footer_subscribe_title">
                          <?php the_field('subscribe_title','option'); ?>
                       </div>
                    <?php endif; ?>

                    <?php if( get_field('subscribe_shortcode','option') ): ?>
                        <div class="footer_subscribe_form">
                            <?php the_field('subscribe_shortcode','option'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_bottom content_width">
        <div class="footer_copy_links">
            <?php if( get_field('copyright','option') ): ?>
                <div class="copyright">
                    <span><?php the_field('copyright','option'); ?></span>
                </div>
            <?php endif; ?>
            <?php if( have_rows('links_to_term','option') ): ?>
                <div class="footer_term_links">
                    <?php while( have_rows('links_to_term','option') ): the_row();?>
                        <div class="footer_link_item">
                            <a href="<?php the_sub_field('link'); ?>">
                                <?php the_sub_field('text'); ?>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
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



</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php wp_footer(); ?>
</div>
</body>
</html>
