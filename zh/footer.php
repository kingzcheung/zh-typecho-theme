<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer>
    <div class="foot-group">
        <div class="container">
            <div class="list about">
                <h2 class="author-name">Kingz Cheung</h2>
                <p class="author-desc">A web developer</p>
                <p><a class="email" href="mailto:kingzcheung@gmail.com">kingzcheung@gmail.com</a></p>
                <ul class="list-inline social">
                    <li><a href="https://plus.google.com/u/0/118338882647999019418"><i class="fa fa-google"></i></a></li>
                    <li><a href="https://github.com/KingzCheung"><i class="fa fa-github"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/CheungKingz"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
            <div class="list description">
                <div class="desc-h">个人简介</div>
                <div class="desc-b">做一个快乐的人</div>
            </div>
            <div class="list youlike">
                <div class="desc-h">你可能喜欢</div>
                <div class="desc-b">
                    <ul class="list-unstyled">
                        <?php echo theme_random_posts(3) ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright">
        <span class="footer__copyright">©<?php echo date('Y') - 2 ?>-<?php echo date('Y') ?> Kingz Cheung</span>
        | <a href="http://www.miitbeian.gov.cn/">粤ICP备14084412号</a>
        <div class="to-top" data-target="html">
            <i class="fa fa-angle-up"></i>
        </div>
    </div>
</footer>
<!--<script src="--><?php //$this->options->themeUrl('assets/js/jquery.min.js'); ?><!--"></script>-->
<script src="//cdn.bootcss.com/jquery/1.12.0/jquery.min.js"></script>
<script src="<?php $this->options->themeUrl('assets/js/main.min.js'); ?>"></script>
<script src="//cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>
<script>
    if (typeof hljs !== 'undefined') hljs.initHighlightingOnLoad();
</script>
</body>
</html>