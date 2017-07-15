/**
 * Created by kingzcheung on 17-7-13.
 */

;(function ($) {
    var rootdir = $('body').data('rootdir') || '';
    $(document).on('click', '.theme button[type="button"]', function (e) {
        var theme = $(this).data('theme');
        if (theme === 'dark') {
            addDark(rootdir, theme);
        } else {
            $('#theme-dark').remove();
        }
        Cookies.set('theme', theme);
    });

    $(document).ready(function () {
        if (Cookies.get('theme', 'light') === 'dark') {
            addDark(rootdir);
        }
    });

    var addDark = function (rootdir) {
        var link = document.createElement('link');
        link.type = link.type = 'text/css';
        link.rel = 'stylesheet';
        link.id = 'theme-dark';
        link.href = 'assets/css/style_dark.min.css';
        $('head').get(0).appendChild(link);
    };
})(jQuery);
