<?php

/**
 * TAG 标签随机返回颜色类名
 *
 * @return mixed
 */
function tag_colors_rand_class()
{
    $color = [
        '#f44336',
        '#e91e63',
        '#9c27b0',
        '#673ab7',
        '#3f51b5',
        '#2196f3',
        '#03a9f4',
        '#00bcd4',
        '#009688',
        '#4caf50',
        '#8bc34a',
        '#ffeb3b',
        '#ffc107',
        '#ff9800',
        '#ff5722',
        '#795548',
        '#9e9e9e',
        '#607d8b',
    ];

    return $color[rand(0, count($color) - 1)];
}

/**
 * 随机文章
 *
 * @param int $number 文章数量
 *
 * @return mixed
 * @throws Typecho_Db_Exception
 * @throws Typecho_Widget_Exception
 */
function theme_random_posts($number = 5)
{
    $defaults = array(
        'number' => $number,
        'before' => '',
        'after' => '',
        'xformat' => '<li><a href="{permalink}" title="{title}"><span>{title}</span><small>On {year}/{month}/{day}</small></a></li>',
    );
    $db = Typecho_Db::get();
    $sql = $db->select()->from('table.contents')
        ->where('status = ?', 'publish')
        ->where('type = ?', 'post')
        ->where('created <= unix_timestamp(now())', 'post')//添加这一句避免未达到时间的文章提前曝光
        ->limit($defaults['number'])
        ->order('RAND()');
    $result = $db->fetchAll($sql);

    $li = '';
    foreach ($result as $val) {
        $val = Typecho_Widget::widget('Widget_Abstract_Contents')->filter($val);
        $li .= str_replace(array('{permalink}', '{title}', '{year}', '{month}', '{day}'), array($val['permalink'], $val['title'], $val['year'], $val['month'], $val['day']), $defaults['xformat']);
    }

    return $defaults['before'] . $li . $defaults['after'];
}

/**
 * 人生格言
 */
function motto()
{
    $m = '爱与死之间，只有一步之遥。';
    $author = '渡边淳一《爱的流放地》';
}

/**
 * 判断是电脑还是手机
 *
 * @return bool
 */
function isMobile()
{

//如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE'])) {

        return true;

    }
//如via信息有wap一定是移动设备
//部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA'])) {
        //找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], "wap")
            ? true : false;
    }
//判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT'])) {
        $clientkeywords = array(
            'nokia',
            'sony',
            'ericsson',
            'mot',
            'samsung',
            'htc',
            'sgh',
            'lg',
            'sharp',
            'sie-',
            'philips',
            'panasonic',
            'alcatel',
            'lenovo',
            'iphone',
            'ipod',
            'blackberry',
            'meizu',
            'android',
            'netfront',
            'symbian',
            'ucweb',
            'windowsce',
            'palm',
            'operamini',
            'operamobi',
            'openwave',
            'nexusone',
            'cldc',
            'midp',
            'wap',
            'mobile',
        );

//从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i",
            strtolower($_SERVER['HTTP_USER_AGENT']))) {
            return true;
        }
    }

//协议法，因为有可能不准确，放到最后判断

    if (isset ($_SERVER['HTTP_ACCEPT'])) {
//如果只支持wml并且不支持html那一定是app
//如果支持wml和html但是wml在html之前则是app
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml')
                !== false) && (strpos($_SERVER['HTTP_ACCEPT'],
                    'text/html') === false ||
                (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml')
                    < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))
            )
        ) {
            return true;
        }
    }
    return false;

}
