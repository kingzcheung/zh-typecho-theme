/**
 * Created by kingzcheung on 17-7-13.
 */
/**
 * Created by kingzcheung on 16-11-13.
 */
;(function ($) {
    if (typeof hljs !== 'undefined') hljs.initHighlightingOnLoad();

    function setClipboardText(event) {
        event.preventDefault();
        var node = document.createElement('div');
        //对documentfragment不熟，不知道怎么获取里面的内容，用了一个比较笨的方式
        node.appendChild(window.getSelection().getRangeAt(0).cloneContents());
        var htmlData = '<div>著作权归作者所有。<br />'
            + '商业转载请联系作者获得授权，非商业转载请注明出处。<br />'
            + '作者：Kingz Cheung<br />链接：' + location.href + '<br />'
            + '来源：' + location.host + '<br /><br />'
            + node.innerHTML
            + '</div>';
        var textData = '著作权归作者所有。\n'
            + '商业转载请联系作者获得授权，非商业转载请注明出处。\n'
            + '作者：Kingz Cheung\n链接：' + location.href + '\n'
            + '来源：' + location.host + '\n\n'
            + window.getSelection().getRangeAt(0);
        if (event.clipboardData) {
            event.clipboardData.setData("text/html", htmlData);
            event.clipboardData.setData("text/plain", textData);
        }
        else if (window.clipboardData) {
            return window.clipboardData.setData("text", textData);
        }
    };
    var art = document.querySelector('article');
    if (art) {
        art.addEventListener('copy', function (e) {
            setClipboardText(e);
        });
    }
})(jQuery);
