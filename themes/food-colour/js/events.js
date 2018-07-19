(function($) {
    // initial event load
    eventsOnClick($('.event-container').first().attr('event-title'), $('.event-container').first().attr('event-content'));
    
    // onclick change
    $('.event-container').on('click', function() {
       eventsOnClick(this.getAttribute('event-title'), this.getAttribute('event-content'));
    });

    function eventsOnClick(title, content) {
        $('.event-main-container').html(
            '<h2>' + title + '</h2>' +
            '<h3></h3>' +
            '<hr>' +
            '<p>' + content + '</p>' +
            '<button class="google-cal">Add to Google calendar</button>' +
            '<button class="facebook-event">Facebook event</button>'
        );
    }
})(jQuery);