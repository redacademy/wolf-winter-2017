(function ($) {
    programHover();
    bioScroll();

    //Hover on programs for desktop view
    function programHover() {
        $('.desktop-thumbnail-container').hover(function(){
            $(this).children().css('color', '#8796a4');
        }, function(){
            $(this).children().css('color', '#172944');
        });
    }

    //Scroll to credentials section when clicked
    function bioScroll() {
        $('.bio-skip-button').click(function() {
            $('html, body').animate({
                scrollTop: $('#info-section').offset().top + 35
            }, 1000);
        });
    }
})(jQuery);