<?php
/*
Template Name: Bio Template
*/
?>
 <section class="col-md-8">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <?php get_template_part('templates/content', 'page'); ?>
  <hr>
  <a data-pin-do="embedUser" href="http://www.pinterest.com/proferik/"data-pin-scale-width="80" data-pin-scale-height="200" data-pin-board-width="400">Visit erik's profile on Pinterest.</a><!-- Please call pinit.js only once per page --><script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>

  </section>
<?php endwhile; ?>
