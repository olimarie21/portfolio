<?php 

get_header(); 

if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    get_template_part('template-parts/content');
  endwhile;
  elseif (is_404(  )) :?>
    <h2 class="error-sceen">Oops...the page doesn't exist</h2>
    <img class="error-image" src="http://localhost/assignment7duplicator_package/wp-content/uploads/2021/06/jelleke-vanooteghem-kabtmcdcAbk-unsplash.jpg">
  <?php else :
    get_template_part('template-parts/content-none.php');
endif;  

get_footer();
