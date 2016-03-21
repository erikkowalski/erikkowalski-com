<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-right navbar-collapse" role="navigation">

      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROJECTS <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="/category/want-need/">You Want / Need</a></li>
          <li><a href="/category/abstract/">Abstract Work</a></li>
           <li><a href="/category/mixed-media/">Mixed Media</a></li>
          <li><a href="/category/photo/">Photography</a></li>
          <li><a href="/category/star-trac/">Star Trac</a></li>
           <li><a href="/category/road-trip/">Road Trip</a></li>
          <li><a href="/category/kawaski/">Kawasaki</a></li>
          <li><a href="/category/cvpa">CVPA</a></li>
        </ul>
      </li>
    </ul>
    </nav>
  </div>
</header>
