<?php ?>
</main> <!-- .site-main -->


<footer class="site-footer" id="site-footer">

    <div class='footer-search'>
        <?php get_search_form(); ?> 
    </div>
  <!-- Social Menu -->
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

    <p> &copy; 2021, Olivia Underdah</p>
</footer>

</div> 
</body>
<?php wp_footer(); ?>
</html>