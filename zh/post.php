<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="container">

    <div class="main">
        <article class="article-card">

            <div class="card-header">
                <h3><?php $this->title() ?></h3>
                <small class="author">by <?php $this->author(); ?> on <?php $this->date('F j, Y'); ?></small>
            </div>

            <div class="card-body">

                <?php $this->content(); ?>

            </div>
            <div class="card-footer"></div>
        </article>

        <div class="card article-card">
            <ul class="list-unstyled">
                <li>
                    <span>上一篇：</span>
                    <?php $this->thePrev('%s', '没有了'); ?>
                </li>
                <li>
                    <span>下一篇：</span>
                    <?php $this->theNext('%s', '没有了'); ?>
                </li>
            </ul>
        </div>
    </div>

    <?php $this->need('sidebar.php'); ?>

</div>

<?php $this->need('footer.php'); ?>
