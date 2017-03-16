(function ($) {
    $('.main-navigation').click(function() {
        $('.mobile-menu').toggleClass('menu-click');
        $('.menu').toggleClass('nav-overlay');
    })



    $('#menu-item-38 a').on('click', function (e) {
        e.preventDefault();
        $('#contact-modal').modal({show: true});
    })

    $('#confirmation-modal').modal({show: false, backdrop: true});

    $('#contact-modal').on('hidden.bs.modal', function () {
        $('#confirmation-modal').show();
    })

    // $('#confirmation-modal').focus();

    // $('.btn-contact-submit').on('hidden.bs.modal', function (e) {
    //     e.preventDefault;
    //     $('#confirmation-modal').focus();
    // })
})(jQuery);

