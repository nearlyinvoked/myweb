<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark d-flex justify-content-center">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php wp_nav_menu( array(
                  'theme_location'  => 'top',
                  'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                  'container'       => 'div',
                  'container_class' => 'collapse navbar-collapse justify-content-center',
                  'container_id'    => 'bs-example-navbar-collapse-1',
                  'menu_class'      => 'navbar-nav justify-content-center',
                  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
              ?>
    </nav>
</footer>
    <?php wp_footer(); ?>
  </body>
</html>
