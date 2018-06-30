jQuery(document).ready(function($) {

    /**
     * Hide and show exhibition description
     */
    $('.close-btn').on('click', function() {
        $('.exhibition-description').hide();
    });   

    $('.exhibition-icon-active').on('click', function() {
        $('.exhibition-description').show();
    });

    /**
     * Toggle exhibition menu
     */
    $('.exhibition-nav-toggle').on('click', function() {
        if ($('.exhibition-nav').css('visibility') === 'hidden') {
            $('.exhibition-nav').css('visibility', 'visible');
        } else {
            $('.exhibition-nav').css('visibility', 'hidden');
            $('.exhibition-description').hide();
        }        
    }); 

});