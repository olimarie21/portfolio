<?php 

get_header(); 

?>

<!-- Dev Section -->
<div class="development-section">
  <h2>Development</h2>

<!-- Dev Query -->
<?php
$development_query = new WP_Query(
    'post_type'       =>  'portfolio_piece',
    'category_name'   =>  'dev_feature',
    'posts_per_page'  =>  '2',
    'order'           =>  'asc'
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

<!-- Design Section -->
<div class="design-section">
  <h2>Design</h2>

<!-- Design Query -->
<?php
$design_query = new WP_Query(
  array(
    'post_type'       =>  'portfolio_piece',
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
