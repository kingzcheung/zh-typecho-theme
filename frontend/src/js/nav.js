/**
 * Created by kingzcheung on 17-7-13.
 */

;(function ($) {
    $(document).on('click', '.navbar-toggle', function (e) {
        $('nav.nav').toggleClass('active');
    });
})(jQuery);