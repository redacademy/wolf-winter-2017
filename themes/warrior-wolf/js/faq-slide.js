(function ($) {
    $('.question-wrapper').click(function() {
        $(this).next().slideToggle('fast');
    })

    $('.question-wrapper').toggle(function (){
        $(this).find('span').text('-').css({'font-size': '3.5rem', 'color': '#4c5a75', 'font-weight': '100'})
    }, function(){
        $(this).find('span').text('+').css({'font-size': '2rem', 'color': '#8796a4'})
    });
})(jQuery);