(function($) {
    $('.event-container').on('click', function() {
        var title = this.getAttribute('event-title');
        var content = this.getAttribute('event-content');
        console.log(title);
        $('.event-main-container').html(
            '<h2>' + title + '</h2>' +
            '<h3></h3>' +
            '<hr>' +
            '<p>' + content + '</p>' +
            '<button>Add to Google calendar</button>' +
            '<button>Facebook event</button>'
        );
    })
})(jQuery);