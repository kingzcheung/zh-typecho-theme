/**
 * Created by kingzcheung on 17-7-13.
 */

;(function ($) {
    $(document).on('click', '.to-top', function (e) {
        var scrollToTarget = $(this).data("target"),
            scrollToOffset = $(this).data("offset") || 0;
        $("html, body").animate({
            scrollTop: $(scrollToTarget).offset().top - scrollToOffset
        }, 500);
    });
})(jQuery);