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
    <?php
        $newsPosts = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
        )); 
    ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        
        <ol class="carousel-indicators">
        <?php
            if ($newsPosts->have_posts()) :
                while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $newsPosts->current_post; ?>" class="<?php if ($newsPosts->current_post == 0) echo 'active';?>"></li>
                <?php endwhile; ?> 
            <?php endif; wp_reset_postdata();?>
        </ol>

        <div class="carousel-inner">
        <?php

            if ($newsPosts->have_posts()) :
                while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>

                    <div class="carousel-item <?php if ($newsPosts->current_post == 0) echo 'active'; ?>">
                        <?php the_post_thumbnail('full', array('class' => 'banner-news-img')); ?>
                        <h1 class="center-image"><?php the_title(); ?></h1>
                    </div>

                <?php endwhile; ?>
            
            <?php else : ?>
                // No News
            <?php endif; ?>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        
    </div>
    <br />

<?php get_footer() ?>