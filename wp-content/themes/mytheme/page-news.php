<?php get_header() ?>


    <div class="container">
        <h1>News</h1>
        <?php
        $newsPosts = new WP_Query('news');

        if ($newsPosts->have_posts()) :
            while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                </a>
                </h3>
                <?php the_excerpt(); ?>
        <?php
            endwhile;

            else :
                // No News
        endif;
        wp_reset_postdata();
        ?>
    </div>



<?php get_footer() ?>