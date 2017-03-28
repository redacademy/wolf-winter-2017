(function ($) {

    //Hover on programs for desktop view
    $('.desktop-thumbnail-container').hover(function(){
        $(this).children().css('color', '#8796a4');
    }, function(){
        $(this).children().css('color', '#172944');
    });
})(jQuery);