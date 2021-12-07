<?php 

get_header(); 

?>

<div class="development-section">
  <h2>Development</h2>

<?php

$development_query = new WP_Query(
  array(
    'category_name'   =>  'development',
    'posts_per_page'  =>  '2',
    'orderby'         =>  'rand'
  )
);


if ( $development_query -> have_posts() ) :
  while ( $development_query -> have_posts() ) :
    $development_query -> the_post();
    get_template_part('template-parts/front-page-loop');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;  ?>
</div>

<div class="design-section">
  <h2>Design</h2>

<?php
$design_query = new WP_Query(
  array(
    'category_name'   =>  'design',
    'posts_per_page'  =>  '2',
    'orderby'         =>  'rand'
  )
);


if ( $design_query -> have_posts() ) :
  while ( $design_query -> have_posts() ) :
    $design_query -> the_post();
    get_template_part('template-parts/front-page-loop');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;  ?>

</div>


<?php get_footer(); 
