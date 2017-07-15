<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer>
    <div class="foot-group">
        <div class="container">
            <div class="list about">
                <h2 class="author-name">Kingz Cheung</h2>
                <p class="author-desc">A web developer</p>
                <p><a class="email" href="mailto:kingzcheung@gmail.com">kingzcheung@gmail.com</a></p>
                <ul class="list-inline social">
                    <li><a href="javascript:;"><i class="fa fa-google"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-github"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
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
                        <li>
                            <a href="javascript:;">
                                <span>教程：使用python实现一个基于命令行的天气应用</span>
                                <small>On 2016/06/22</small>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span>教程：使用python实现一个基于命令行的天气应用</span>
                                <small>On 2016/06/22</small>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span>swift学习笔记13之错误处理</span>
                                <small>On 2016/06/22</small>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright">
        <span class="footer__copyright">©2015-2017 Kingz Cheung</span>
        <div class="to-top" data-target="html">
            <i class="fa fa-angle-up"></i>
        </div>
    </div>
</footer>
<!--<script src="--><?php //$this->options->themeUrl('assets/js/jquery.min.js'); ?><!--"></script>-->
<script src="https://cdn.bootcss.com/jquery/1.12.0/jquery.min.js"></script>
<script src="<?php $this->options->themeUrl('assets/js/main.min.js'); ?>"></script>
<script>
    if (typeof hljs !== 'undefined') hljs.initHighlightingOnLoad();
</script>
</body>
</html>