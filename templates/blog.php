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
      <li class="active" ><a class="active" href="/category/blog/">Blog</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROJECTS <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="/category/colleges-universities/">Kawaski</a></li>
          <li><a href="#">K-12</a></li>
          <li><a href="#">Corporate</a></li>
          <li><a href="#">Healthcare</a></li>
           <li><a href="#">Libraries</a></li>
          <li><a href="#">Places of Worship</a></li>
          <li><a href="#">Public &amp; Civic</a></li>
           <li><a href="#">Residential</a></li>
          <li><a href="#">Senior Living</a></li>
        </ul>
      </li>
    </ul>
    </nav>
  </div>
</header>
