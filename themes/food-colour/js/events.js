(function($) {
    // desktop/mobile check
    var target;
    var mobile;

    checkScreenWidth();


    $(window).resize(function(){
        checkScreenWidth();
    });

    
    function checkScreenWidth() {
        if ($(window).width() <= 620) {
            target = '.event-description';
            mobile = true;
        } else {
            target = '.event-main-container';
            mobile = false;
        }

        eventsOnClick($('.event-container').first().attr('event-title'), $('.event-container').first().attr('event-google'), $('.event-container').first().attr('event-facebook'), $('.event-container').first().attr('event-organization'), $('.event-container').first().attr('event-branch'), $('.event-container').first().attr('event-address'), $('.event-container').first().attr('event-number'));
    }
    
    // initial event load
    eventsOnClick($('.event-container').first().attr('event-title'), $('.event-container').first().attr('event-google'), $('.event-container').first().attr('event-facebook'), $('.event-container').first().attr('event-organization'), $('.event-container').first().attr('event-branch'), $('.event-container').first().attr('event-address'), $('.event-container').first().attr('event-number'));
    
    // onclick change
    $('.event-container').on('click', function() {
       eventsOnClick(this.getAttribute('event-title'), this.getAttribute('event-google'), this.getAttribute('event-facebook'), this.getAttribute('event-organization'), this.getAttribute('event-branch'), this.getAttribute('event-address'), this.getAttribute('event-number'));
    //    console.log($(this).context.lastElementChild);
       if (mobile) {
        $('.event-description').toggle();
        // $(this).context.lastElementChild().show();
       }
       
    //    $(this).next('.event-description').show();
    });

    function eventsOnClick(title, google, facebook, organization, branch, address, number) {
        $(target).html(
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