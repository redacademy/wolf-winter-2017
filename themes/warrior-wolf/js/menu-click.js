(function ($) {
    $('.main-navigation').click(function() {
        $('.main-navigation').toggleClass('button-color-change');
        $('.mobile-menu').toggleClass('menu-click');
        $('.menu').toggleClass('nav-overlay');
    })
})(jQuery);

