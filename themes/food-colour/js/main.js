jQuery(document).ready(function($) {
    /**
     * Nav-Menu toggle
     */
    $('.menu-toggle').on('click', function(){
        if ($('header').height() <= 100) {
            $('#masthead').css({
                'height': '400px',
                'align-items': 'baseline',
            });
            $('#primary-menu').css({
                'display': 'grid',
            })
            $('.menu-toggle').css({
                'top': '28px',
            })
            $('.site-branding').css({
                'top': '31px',
            })
        } else if ($('header').height() >= 200) {
            $('#masthead').css({
                'height': '100px',
            });
            $('#primary-menu').css({
                'display': 'none',
            })
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
        }, 1100, function() {
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

//click big button to show forms
    $("#forms").click(function(){
        $("#gform_1").toggle();
    });
<<<<<<< HEAD
=======

>>>>>>> 9f7fb06799292f35da903df004d82d451ddf7072
    $("#formsmobile").click(function(){
        $("#gform_1").toggle();
    });
});

