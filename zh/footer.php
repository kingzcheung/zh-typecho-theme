<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php require __DIR__ . '/vendor/autoload.php'?>
<?php
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
?>
<footer>
    <div class="foot-group">
        <div class="container">
            <div class="list about">
                <h2 class="author-name"><?php echo getenv('AUTHOR_NAME')?></h2>
                <p class="author-desc"><?php echo getenv('AUTHOR_DESC')?></p>
                <p><a class="email" href="mailto:<?php echo getenv('AUTHOR_EMAIL')?>"><?php echo getenv('AUTHOR_EMAIL')?></a></p>
                <ul class="list-inline social">
                    <li><a href="<?php echo getenv('AUTHOR_GOOGLE')?>"><i class="fa fa-google"></i></a></li>
                    <li><a href="<?php echo getenv('AUTHOR_GITHUB')?>"><i class="fa fa-github"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo getenv('AUTHOR_TWITTER')?>"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
            <div class="list description">
                <div class="desc-h">个人简介</div>
                <div class="desc-b"><?php echo getenv('AUTHOR_INTRODUCTION')?></div>
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
        <span class="footer__copyright">©<?php echo date('Y') - 2 ?>-<?php echo date('Y') ?> <?php echo getenv('USER')?></span>|
        <div class="to-top" data-target="html">
            <i class="fa fa-angle-up"></i>
        </div>
    </div>
</footer>
<!--<script src="--><?php //$this->options->themeUrl('assets/js/jquery.min.js'); ?><!--"></script>-->
<script src="//cdn.bootcss.com/jquery/1.12.0/jquery.min.js"></script>
<script src="<?php $this->options->themeUrl('assets/js/main.min.js'); ?>"></script>
<script src="//cdn.bootcss.com/highlight.js/9.15.10/highlight.min.js"></script>
<script src="//cdn.bootcss.com/highlight.js/9.15.10/languages/go.min.js"></script>
<script src="//cdn.bootcss.com/highlight.js/9.15.9/languages/swift.min.js"></script>
<script src="//cdn.bootcss.com/highlight.js/9.15.10/languages/php.min.js"></script>
<script src="//cdn.bootcss.com/highlight.js/9.15.10/languages/sql.min.js"></script>
<script>
    if (typeof hljs !== 'undefined') {
        hljs.initHighlightingOnLoad();
    }

</script>
</body>
</html>