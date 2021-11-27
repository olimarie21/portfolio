<?php ?>

<article <?php post_class(); ?>>

  <div class="project-thumbnail">
      <a href="<?php the_permalink();?>">
      <?php the_post_thumbnail( );?></a>
  </div>

  <h3 class="project-title">
      <a href="<?php the_permalink();?>"><?php the_title();?></a>
  </h3>
</article>