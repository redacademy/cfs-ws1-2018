jQuery(document).ready(function($) {
    /**
     * Set height of exhibition nav icons
     */

    setExhibitionNav();
 
    $(window).resize(function(){
        setExhibitionNav();
    });

    function setExhibitionNav() {
        var items;
        if($(window).height() < 620 &&$(window).width() > 620) {
            items = Math.ceil($('.exhibition-icon-img').length / 2);
        } else {
            items = $('.exhibition-icon-img').length;
        }

        if($(window).height() > $(window).width() && $(window).width() < 620) {
            $('.exhibition-nav').css({
                'height': $(window).width() * .8
            });
        }

        var iconHeight = $('.exhibition-nav').height()/items;

        $('.exhibition-icon-img').css({
            'height': iconHeight,
            'width': iconHeight,
        });
        $('.exhibition-icon').css({
            'flex-basis': iconHeight,
            'height': iconHeight,
            'width': iconHeight,
        });
        
        if($(window).height() > $(window).width() && $(window).width() < 620) {
            $('.exhibition-nav').css({
                'flex-wrap': 'wrap',
                'width': iconHeight * 2,
            });

        } else if($(window).height() < 620) {
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

        console.log(iconHeight, $('.exhibition-icon-img').width(), $('.exhibition-icon-img').height());
    }
});