(function ($) {
    $('.main-navigation').click(function() {
        $('.mobile-menu').toggleClass('menu-click');
        $('.menu').toggleClass('nav-overlay');
    })
})(jQuery);