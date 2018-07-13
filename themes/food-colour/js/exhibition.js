jQuery(document).ready(function($) {
    /**
     * Hide and show exhibition description
     */
    if($(window).width() > 620) {
        $('.exhibition-description').css('opacity', '1');  
    } else {
        $('.exhibition-description').css('opacity', '0');  
    }
    

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
     * Set height of exhibition nav icons
     */
    if($('.single-exhibition').length === 1) {
        setExhibitionNav();

        $(window).resize(function(){
            setExhibitionNav();
        });
    }

    function setExhibitionNav() {  
        var items;
        if($(window).height() < 620 || $(window).width() < 620) {
            items = Math.ceil($('.exhibition-icon-img').length / 2);
        } else {
            items = $('.exhibition-icon-img').length;
        }

        var iconHeight = setPortrait(items);

        $('.exhibition-icon-img').css({
            'height': iconHeight,
            'width': iconHeight,
        });
        $('.exhibition-icon').css({
            'flex-basis': iconHeight,
            'height': iconHeight,
            'width': iconHeight,
        });
        $('.exhibition-nav').css({
            'height': iconHeight * items,
        });
        
        if($(window).height() < 620 || $(window).width() < 620) {
            $('.exhibition-nav').css({
                'flex-wrap': 'wrap',
                'width': iconHeight * 2, 
            });
        } else {
            $('.exhibition-nav').css({
                'flex-wrap': 'nowrap',
                'width': iconHeight,
            });
        }
    }

    function setPortrait(items) {
        var iconHeight;
        if($(window).height() > $(window).width() && $(window).width() < 620) {
            $('html').css({
                'transform': 'rotate(-90deg)',
                'transform-origin': 'left top',
                'width': '100vh',
                'overflow-x': 'hidden',
                'position': 'absolute',
                'top': '100%',
                'left': '0',
            });
            $('.exhibition-nav-container ').css({
                    'display': 'block'
            });
           iconHeight = $(window).width()*.8/items;

        } else {
            $('html').removeAttr('style');
            $('.exhibition-nav-container ').css({
                'display': 'flex'
            });
            iconHeight = $(window).height()*.8/items;
        }
        return iconHeight;
    }
});