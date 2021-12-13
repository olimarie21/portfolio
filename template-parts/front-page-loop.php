<?php ?>

<!-- Loop for front-page to feature design and development works by Category -->

<article <?php post_class(); ?>>

  <div class="project-thumbnail">
      <a href="<?php the_permalink();?>">
      <?php the_post_thumbnail( );?></a>
  </div>

  <div class="project-details">
    <h3 class="project-title">
        <a href="<?php the_permalink();?>"><?php the_title();?></a>
    </h3>

<!-- Custom post info insert regarding project tools used -->

  <h4 class="project-tools">
      <?php the_meta() ;?>
    </h4>
  </div>

</article>