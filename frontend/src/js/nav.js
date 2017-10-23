/**
 * Created by kingzcheung on 17-7-13.
 */

;(function ($) {
    $(document).on('click', '.navbar-toggle', function (e) {
        $('nav.nav').toggleClass('active');
        $('.nav-mask').addClass('active');
        $(this).toggleClass('active');

    });

    $(document).on('click', '.nav-mask', function (e) {
        $(this).removeClass('active');
        $('nav.nav').removeClass('active');
    });
})(jQuery);