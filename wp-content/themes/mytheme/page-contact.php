<?php get_header(); ?>
<hr>
<p id="contactme">Keep in Touch with me</p>
<br>
<div class="container">
    <div class="row">
        <div class="col mx-5">
            <a href="https://www.facebook.com/kevinrlboi"><img class="img-fluid socialmedia" src="<?php bloginfo('template_url'); ?> /image/facebook.png" alt=""></a>
        </div>
        <div class="col mx-5">
            <a href="https://www.instagram.com/kevinrl__/"><img class="img-fluid socialmedia" src="<?php bloginfo('template_url'); ?> /image/instagram.png" alt=""></a>
        </div>
        <div class="col mx-5">
            <a href="https://twitter.com/nanntzz"><img class="img-fluid socialmedia" src="<?php bloginfo('template_url'); ?> /image/twitter.png" alt=""></a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col mx-5">

        </div>
        <div class="col mx-5">
            <a href="https://steamcommunity.com/id/NearlyInvoked"><img class="img-fluid socialmedia" src="<?php bloginfo('template_url'); ?> /image/steam.png" alt=""></a>
        </div>
        <div class="col mx-5">
        
        </div>
    </div>
</div>

<br>
<br>
<br>
<?php echo do_shortcode('[instagram-feed]'); ?>

<?php get_footer(); ?>