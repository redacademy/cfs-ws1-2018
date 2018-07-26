(function($) {   
    var mobile;

    checkScreenWidth();
        
    // initial event load
    eventsOnClick($('.event-container').first().attr('event-title'), $('.event-container').first().attr('event-google'), $('.event-container').first().attr('event-facebook'), $('.event-container').first().attr('event-organization'), $('.event-container').first().attr('event-branch'), $('.event-container').first().attr('event-address'), $('.event-container').first().attr('event-number'));
    $('.event-container').first().addClass('event-active');

    $(window).resize(function(){
        checkScreenWidth();
        $('.form-mobile').hide();
        $('.form-mobile').hide();

    });

    // desktop/mobile check
    function checkScreenWidth() {
        if ($(window).width() <= 620) {
            mobile = true;
            $('.event-description').hide();
        } else {
            mobile = false;
        }
    }
    
    // onclick change
    $('.event-container').on('click', function() {
       eventsOnClick(this.getAttribute('event-title'), this.getAttribute('event-google'), this.getAttribute('event-facebook'), this.getAttribute('event-organization'), this.getAttribute('event-branch'), this.getAttribute('event-address'), this.getAttribute('event-number'));
       $('.event-container').removeClass('event-active');
       $(this).addClass('event-active');
       
       // jquery animation for mobile 
       if (mobile) {
            if($(this).find('.event-description').css('display') === 'none') {
                $('.event-description').slideUp();
                $(this).find('.event-description').slideDown();
            } else {
                $('.event-description').slideUp();
            }
       }   
    });

    function eventsOnClick(title, google, facebook, organization, branch, address, number) {
        $('.event-main-container').html(
            '<h2>' + title + '</h2>' +
            '<h3 class="branch-text">' + branch + '</h3>' +
            '<hr>' +
            '<p class="organization-text">' + organization + '</p>' +
            '<p>' + address + '</p>' +
            '<p>' + number + '</p>' +
            '<div class="event-social"></div>'
        );

        if (google) {
            $('.event-social').append('<a target="_blank" href="' + google + '" class="google-cal">Add to Google calendar</a>');
        }

        if (facebook) {
            $('.event-social').append('<a target="_blank" href="' + facebook + '" class="facebook-event">Facebook event</a>');
        }
    }
})(jQuery);