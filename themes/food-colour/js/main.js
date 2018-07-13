jQuery(document).ready(function($) {
    /**
     * Nav-Menu toggle
     */
    $('.menu-toggle').on('click', function(){
        if ($('.site-header').height() <= 200) {
            $('.site-header').css({
                'height': '400px',
                'align-items': 'baseline',
            });
            $('.menu-main-menu-container').css({
                'position': 'absolute',
                'top': '106px',
                'left' : '0px',
            });
            $('#primary-menu').css({
                'align-items': 'center',
                'display': 'grid',
                'grid-template-columns': '100%',
                'grid-template-rows': '1fr 1fr 1fr',
                'height': '340px',
            });
            $('#primary-menu > li > a').css({
                'border-width': 'medium',
            });
            $('.site-branding').css({
                'position': 'relative',
                'top': '31px',
            });
            $('.menu-toggle').css({
                'position': 'relative',
                'top': '28px',
            });
        } else if ($('.site-header').height() >= 200) {
            $('.site-header').css({
                'height': '100px',
                'align-items': 'center',
            });
            $('#primary-menu').css({
                'display': 'none',
                'grid-template-columns': 'none',
                'height': 'auto',
            });
            $('#primary-menu > li > a').css({
                'border-width': 'inherit',
            });
            $('.site-branding').css({
                'top': '0px',
            });
            $('.menu-toggle').css({
                'position': 'relative',
                'top': '0',
            });
          }
    });
    
    //* take part steps 1,2,3,4,5 toggle on click
    var $firstItem = $($('.take-text-wrapper')[0]);
    $firstItem.addClass('active');
    var clicked2 = false;
    var clicked3 = false;
    $('.iconbutton').click(function(e) {
      var $this = $(this).closest('.take-text-wrapper');
      if ($this.index() == 2 && clicked2 == false) {
        clicked2 = true;
          e.preventDefault();
      }
      if ($this.index() == 3 && clicked3 == false) {
        clicked3 = true;
          e.preventDefault();
      }
      var nextItem = $this.index() + 1;
      $($('.take-text-wrapper')[nextItem]).addClass('active');
    });
    /**`
     * Set height of exhibition nav icons
     */


    // smooth scroll from css tricks // for Host/Share links @ take part page
    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
    // On-page links
    if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
        && 
        location.hostname == this.hostname
    ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
            return false;
            } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
            }
        });
        }
    }
    });

    $("#forms").click(function(){
        $("#gform_1").toggle();
    });
});

