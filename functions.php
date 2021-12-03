<?php

if ( ! function_exists( 'portfolioOU_setup' ) ) :
 
   function portfolioOU_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );
     add_theme_support( 'custom-logo' );

     register_nav_menus( array(
         'menu-main' => 'Main Menu',
         'menu-footer' => 'Secondary Menu',
         'menu-social' => 'Social Menu',
      ) );
   }
 
endif;
 
add_action('after_setup_theme', 'portfolioOU_setup');

function custom_search_form( $form ) {
   $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
     <div class="custom-search-form"><label class="screen-reader-text" for="s">' . __( 'Search:' ) . '</label>
     <input type="text" value="' . get_search_query() . '" name="s" id="s" />
     <button type="submit" class=search-submit><i class="fa fa-search"></i></button>
   </div>
   </form>';
 
   return $form;
 }
 
 add_filter( 'get_search_form', 'custom_search_form', 100 );
 

function portfolioOU_custom_logo_setup() {
   $defaults = array(
       'height'               => 400,
       'width'                => 400,
       'flex-height'          => true,
       'flex-width'           => true,
       'header-text'          => array( 'site-title', 'site-description' ),
       'unlink-homepage-logo' => true, 
   );

   add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'portfolioOU_custom_logo_setup' );
 
function portfolioOU_scripts_styles(){
   wp_enqueue_style('portfolioOU_style', get_stylesheet_uri(), array(), time());
   wp_enqueue_style('portfolioOU_style_googlefonts', 'https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700;900&display=swap', array(), null);
   wp_enqueue_style('portfolioOU_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
   wp_enqueue_script("jquery");

   if (!is_admin( )) :
      wp_enqueue_script( 'portfolioOU_script_main_js', get_template_directory_uri() . '/js/main.js', array(), null, true );
   endif;
}

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
 
add_action('wp_enqueue_scripts', 'portfolioOU_scripts_styles');