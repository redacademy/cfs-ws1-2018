jQuery(document).ready(function($) {
    /**
     * Set height of exhibition nav icons
     */
    if($('.single-exhibition').length === 1) {
        setExhibitionNav();
        checkPortrait();
     
        $(window).resize(function(){
            setExhibitionNav();
            checkPortrait();
        });
    }

    function setExhibitionNav() {
        var items;
        if($(window).height() < 620 && $(window).width() > 620) {
            items = Math.ceil($('.exhibition-icon-img').length / 2);
        } else {
            items = $('.exhibition-icon-img').length;
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
        
        if($(window).height() < 620) {
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

    function checkPortrait() {
        var items = Math.ceil($('.exhibition-icon-img').length / 2);
        var iconHeight = $('.exhibition-nav').height()/items;
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
            $('.exhibition-nav ').css({
                'height': $(window).width()* .8
            });
            $('.exhibition-nav').css({
                // 'flex-wrap': 'wrap',
                // 'width': iconHeight * 2,
            });
        } else {
            $('html').removeAttr('style');
        }
        setExhibitionNav();
    }

});