(function($) {
    // initial event load
    eventsOnClick($('.event-container').first().attr('event-title'), $('.event-container').first().attr('event-google'), $('.event-container').first().attr('event-facebook'), $('.event-container').first().attr('event-organization'), $('.event-container').first().attr('event-branch'), $('.event-container').first().attr('event-address'));
    
    // onclick change
    $('.event-container').on('click', function() {
       eventsOnClick(this.getAttribute('event-title'), this.getAttribute('event-google'), this.getAttribute('event-facebook'), this.getAttribute('event-organization'), this.getAttribute('event-branch'), this.getAttribute('event-address'));
    });

    function eventsOnClick(title, google, facebook, organization, branch, address) {
        $('.event-main-container').html(
            '<h2>' + title + '</h2>' +
            '<h3 class="branch-text">' + branch + '</h3>' +
            '<hr>' +
            '<p class="organization-text">' + organization + '</p>' +
            '<p>' + address + '</p>'
        );

        if (google) {
            $('.event-main-container').append('<a target="_blank" href="' + google + '" class="google-cal">Add to Google calendar</a>');
        }

        if (facebook) {
            $('.event-main-container').append('<a target="_blank" href="' + facebook + '" class="facebook-event">Facebook event</a>');
        }
    }
})(jQuery);