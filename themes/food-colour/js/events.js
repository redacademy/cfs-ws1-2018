(function($) {
    $('.event-container').on('click', function() {
        var title = this.getAttribute('event-title');
        var content = this.getAttribute('event-content');
        console.log(title);
        $('.event-main-container').html(
            '<h2>' + title + '</h2>' +
            '<p>' + content + '</p>'
        );
    })
})(jQuery);