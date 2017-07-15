<?php
/**
 * 这是一个 极简风格的 Typecho 主题， <a href="https://kingzcheung.com">https://kingzcheung.com</a>
 *
 * @package zh-typecho theme
 * @author  Kingz Cheung
 * @version 1.0
 * @link    https://kingzcheung.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="container">

    <div class="main">
        <?php while ($this->next()): ?>
            <article class="article-card">
                <div class="card-header">
                    <h3><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
                    <small class="author">by <?php $this->author(); ?> on <?php $this->date('F j, Y'); ?></small>
                </div>
                <div class="card-body">
                    <a href="<?php $this->permalink() ?>"><?php $this->content(); ?></a>
                </div>
                <div class="card-footer"></div>
            </article>
        <?php endwhile; ?>

        <nav class="text-center">
            <?php $this->pageNav('<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>', 3, '...', array('wrapTag' => 'ul', 'wrapClass' => 'pagination', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
        </nav>
    </div>

    <?php $this->need('sidebar.php'); ?>
</div>

<?php $this->need('footer.php'); ?>
