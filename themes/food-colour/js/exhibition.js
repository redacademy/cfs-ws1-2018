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
        if($(window).height() < 620) {
            items = Math.ceil($('.exhibition-icon-img').length / 2);
        } else {
            items = $('.exhibition-icon-img').length;

        }
        var iconHeight = $('.exhibition-nav').height()/items *.99;
        $('.exhibition-icon-img').css({
            'height': iconHeight,
            'width': iconHeight,
        });
        $('.exhibition-icon').css({
            'height': iconHeight,
            'width': iconHeight,
        });

        
        if($(window).height() > $(window).width() && $(window).width() < 620) {
            // console.log('portrait');

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
    }
});