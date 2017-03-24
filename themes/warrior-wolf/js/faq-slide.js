(function ($) {
    $('.question-wrapper').click(function() {
        $(this).next().slideToggle('fast');
    })

    $('.question-wrapper').toggle(function (){
        $(this).find('span').text('-')
    }, function(){
        $(this).find('span').text('+')
    });
})(jQuery);