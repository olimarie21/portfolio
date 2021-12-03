jQuery(document).ready(function() {
    jQuery('.mobile-nav').click(function(e) {
        jQuery('.close-menu').show();
        jQuery('.primary-menu').show();

        e.preventDefault();
    });

    jQuery('.close-menu').click(function(e) {
        jQuery('.primary-menu').hide();

        e.preventDefault();
    });

    jQuery('.main-menu-desktop li').on('click', 'a', function(){
        console.log('click');
        jQuery('a').removeClass('active-link');
        jQuery(this).addClass('active-link');
    });
});