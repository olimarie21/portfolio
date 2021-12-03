<?php ?>
  
  <?php
    if(is_category(  )) : ?>
      <h2 class="category-title"> <?php the_archive_title(); ?> </h2>
    <?php elseif(is_search()) : ?>
      <h2 class="search-results-title">Search result for "<?php the_search_query( );?>"</h2>
    <?php elseif(is_tag( )) :
      $post_tags = get_the_tags();
        if ( $post_tags ) { ?>
          <h2 class="tag-page-title">Tag: <?php echo $post_tags[0]->name; ?> </h2>
        <?php }
    endif;?>



<article <?php post_class(); ?>>

  <?php if(is_404(  )) :?>
    <h2 class="error-sceen">Oops...this page doesn't exist</h2>
  <?php endif; ?>

  <h3 class="post-title">
    <?php 
      if (!is_single() ) : ?>
        <a href="<?php the_permalink();?>"><?php the_title();?></a>
      <?php endif; ?>
  </h3>

  <h2 class="post-title-single">
    <?php 
      if (is_single() ) :
        the_title();
    endif; ?>
  </h2>

  <!-- <?php if(!is_single()) : ?>
    <div class="entry-title">
      <?php the_category( );
    endif; ?>
  </div> -->

  <div class="entry-thumbnail">
    <?php
      if (is_single(  )) :
        the_post_thumbnail( );
      else : ?>
        <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail( );?></a>
      <?php endif; ?>
  </div>

  <div class="entry-content">
    <?php 
      if ( is_single() ) :
        the_content(); ?>
        <h4 class="project-tools">
          <div>tools</div>
          <?php the_meta() ;?>
        </h4>
      <?php else: ?>
        <h4 class="project-tags">
          <?php the_tags('', " | ") ;?>
        </h4>
      <?php endif;
    ?>
  </div>
</article>