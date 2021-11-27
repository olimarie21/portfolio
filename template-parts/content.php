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
    <h2 class="error-sceen">Oops...the page doesn't exist</h2>
    <img class="error-image" src="">
  <?php endif; ?>

  <h2 class="entry-title">
    <?php 
      if (is_single() ) :
        the_title('<i class="fas fa-bread-slice"></i>');
      else: ?>
        <a href="<?php the_permalink();?>"><?php the_title();?></a>
      <?php endif; ?>
  </h2>

  <?php if(!is_single()) : ?>
    <div class="entry-title">
      <?php the_category( '<h1 id="symbol"> * </h1>');
    endif; ?>
  </div>

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
            <div class="entry-title single-details">
          <div class="single-categories">
            <i class="fas fa-folder"></i>
            <?php the_category(' &bull; '); ?>
          </div>
        </div>
        <div class="single-tags">
          <?php the_tags( '<i class="fas fa-tag"></i> Tags: ' , ' | ') ?>
        </div>
      <?php else:
        the_excerpt();
      endif;
    ?>
  </div>
</article>