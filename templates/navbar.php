<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <!-- 
      Dynamic site name with get_bloginfo('name')
      Custom to send back to home with get_site_url('/')
    -->
    <a class="navbar-brand" href="<?php echo get_site_url( '/' );?>"><?php echo get_bloginfo('name')?><span>.</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>
    <?php
    /**
     * Putting the custom Menu
     * https://developer.wordpress.org/reference/functions/wp_nav_menu/
     */
      $args = [
        //Theme for custom registered menu => check name in /includes/menu.php
        'theme_location' => 'main-menu',
        //Stylizing Container
        'container' => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id' => 'ftco-nav',
        //Stylizing Ul
        'menu_class' => 'navbar-nav ml-auto',
      ];
      wp_nav_menu($args);
    ?>
  </div>
</nav>
<!-- END NAVBAR -->