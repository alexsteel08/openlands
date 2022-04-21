<?php


get_header(); ?>


<?php get_template_part('template-parts/content'); ?>

<?php
$thecontent = get_the_content();
if(!empty($thecontent)) { ?>
    <div class="content_page">
        <div class="content_width">
            <h1 class="content_title" data-aos="fade-up" data-aos-delay="100"><?php the_title();?></h1>
            <div class="content_text" data-aos="fade-up" data-aos-delay="200">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

<?php } ?>
<?php

get_footer();
