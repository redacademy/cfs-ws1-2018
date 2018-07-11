jQuery(document).ready(function($) {

    /**
     * Hide and show exhibition description
     */
    $('.exhibition-description').css('opacity', '1');

    $('.close-btn').on('click', function() {
        $('.exhibition-description').css('opacity', '0');
        $('.exhibition-description').delay(1000).hide(0);
    });   

    $('.exhibition-icon-active').on('click', function(event) {
        event.preventDefault();
        $('.exhibition-description').show(0);
        $('.exhibition-description').css('opacity', '1');
    });

    /**
     * Toggle exhibition menu
     */
    $('.exhibition-nav-toggle').on('click', function() {
        if ($('.exhibition-nav').css('opacity') === '0') {
            $('.exhibition-nav').css('opacity', '1');
            $('.exhibition-nav').css('visibility', 'visible');
        } else {
            $('.exhibition-nav').css('opacity', '0');

            setTimeout(
                function() 
                {
                    $('.exhibition-nav').css('visibility', 'hidden');
                }, 500);
            $('.exhibition-description').css('opacity', '0');
            $('.exhibition-description').delay(1000).hide(0);  
        }        
    }); 

    /**
     * Nav-Menu toggle
     */
    $('.menu-toggle').on('click', function(){
        $('.main-navigation ul').toggle( function(){
            $('.main-navigation ul').css({
                
            });
            $('.site-header').css({
                'height': '400px',
                'align-items': 'baseline',
            });
            $('.menu-main-menu-container').css({
                'position': 'absolute',
                'top': '50px',
                'left' : '0px',
            });
            $('#primary-menu').css({
                'align-items': 'center',
                'display': 'grid',
                'grid-template-columns': '100%',
                'grid-template-rows': '1fr 1fr 1fr',
                'height': '340px',
            });
        });
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
  
  
  
  

});

