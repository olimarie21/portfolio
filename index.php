<?php 

get_header(); 

if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    get_template_part('template-parts/content');
  endwhile;
  elseif (is_404(  )) :?>
    <h2 class="error-sceen">Oops...the page doesn't exist</h2>
  <?php else :
    get_template_part('template-parts/content-none.php');
endif;  

get_footer();
