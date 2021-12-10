<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Header Menu Mobile -->
  <div class="primary-menu">
    <div class="close-menu">&#10005;</div>
    <?php 
      wp_nav_menu( array(
        'theme_location'    =>  'menu-main',
        'container'         =>  'nav', 
        'container_class'   =>  'menu-container',
        'menu_class'        =>  'main-menu',
      )); 
    ?>

      <!-- Social Menu Mobile -->
      <?php 
        wp_nav_menu( array(
            'theme_location'    =>  'menu-social',
            'container'         =>  'nav', 
            'container_class'   =>  'menu-container',
            'menu_class'        =>  'social-menu',
            'link_before'       =>  '<span class="screen-reader-text"',
            'link_after'        =>  '</span>'
        )); 
    ?>

  </div>

<!-- Site Header Content -->
  <header class="site-header">
    <div class="header-container">
        <div class="mobile-nav-container">
          <a class="mobile-nav" href="#">&#9776;</a>
        </div>

        <h1 class="site-title">
          <?php 
          if(!is_home( )) : ?>
            <a href="<?php echo home_url( );?>">
              <?php bloginfo('name');?>
            </a>
          <?php else:
            bloginfo('name');
          endif;
          ?>
        </h1>

        <h4 class="site-tagline">
          <?php bloginfo('description'); ?>
        </h4>
      </div>

    <!-- Header Menu Desktop -->
      <div class="primary-menu-desktop">
        <?php 
          wp_nav_menu( array(
            'theme_location'    =>  'menu-main',
            'container'         =>  'nav', 
            'container_class'   =>  'menu-container-desktop',
            'menu_class'        =>  'main-menu-desktop',
          )); 
        ?>

      <div class="desktop-search">
        <?php get_search_form(); ?> 
      </div>

      <?php 
        wp_nav_menu( array(
            'theme_location'    =>  'menu-social',
            'container'         =>  'nav', 
            'container_class'   =>  'menu-container',
            'menu_class'        =>  'social-menu',
            'link_before'       =>  '<span class="screen-reader-text"',
            'link_after'        =>  '</span>'
        )); 
    ?>
    <p class="desktop-copyright"> &copy; 2021, Olivia Underdah</p>
    </div>

  </header>

  <div id="primary" class="content-area">
  <main id="main" class="site-main">