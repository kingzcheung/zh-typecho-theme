<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<aside class="aside">
    <?php if($this->is('index')):?>
    <!--search,theme-->
    <div class="aside-card">
        <div class="aside-body">
            <div class="search">
                <form action="" method="post" class="searching">
                    <input type="text" name="s" placeholder="Search for articles">
                </form>
            </div>
        </div>
    </div>
    <?php endif;?>

    <div class="aside-card">
        <div class="aside-header">
            <h3>theme</h3>
        </div>
        <div class="aside-body">
            <div class="theme">
                <ul class="list-inline">
                    <li>
                        <button type="button" class="light" data-theme="light"></button>
                    </li>
                    <li>
                        <button type="button" class="dark" data-theme="dark"></button>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="aside-card">
        <div class="aside-header">
            <h3>ARCHIVE</h3>
        </div>
        <div class="aside-body">
            <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=30')->to($tags); ?>
            <?php if ($tags->have()): ?>
            <ul class="list-inline tags">

                <?php while ($tags->next()): ?>
                    <li class="tags-list"><a href="<?php $tags->permalink(); ?>" class="tag" title="<?php $tags->name(); ?>" style="background-color: <?php echo tag_colors_rand_class(); ?>">#<?php $tags->name(); ?></a></li>
                <?php endwhile; ?>

                <?php else: ?>
                    <a><?php _e('没有任何标签'); ?></a>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <!--ARCHIVE-->
    <div class="aside-card">
        <div class="aside-header">
            <h3>ARCHIVE</h3>
        </div>
        <div class="aside-body">
            <ul class="list-unstyled">
                <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
                    ->parse('<li class="item"><a class="category" href="{permalink}"><span class="title">{date}</span> <i class="num">{count}</i></a></li>'); ?>

            </ul>
        </div>
    </div>

</aside>