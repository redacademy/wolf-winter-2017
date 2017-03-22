(function ($) {
    checkSize();
    $(window).resize(checkSize);

    function checkSize(){
        if ($('.site-header').css('background') == '#4c5a75' ){
            $('.main-navigation').click(function() {
                $('.site-header').toggleClass('header-border-change');
                $('.main-navigation').toggleClass('button-color-change');
                $('.mobile-menu').toggleClass('menu-click');
                $('.menu').toggleClass('nav-overlay');
            })
        }
    }
})(jQuery);
