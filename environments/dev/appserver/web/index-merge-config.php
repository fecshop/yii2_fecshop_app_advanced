<?php

error_reporting(E_ALL || ~E_NOTICE); //除去 E_NOTICE 之外的所有错误信息
//ini_set('session.cookie_domain', '.fancyecommerce.com'); //初始化域名，
$http = ($_SERVER['SERVER_PORT'] == 443) ? 'https' : 'http';
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__.'/../../vendor/autoload.php';
require __DIR__.'/../../vendor/fancyecommerce/fecshop/yii/Yii.php';

require __DIR__.'/../../common/config/bootstrap.php';

require __DIR__.'/../config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__.'/../../common/config/main.php'),
    require(__DIR__.'/../../common/config/main-local.php'),
    require(__DIR__.'/../config/main.php'),
    require(__DIR__.'/../config/main-local.php'),
    // fecshop services config
    require(__DIR__.'/../../vendor/fancyecommerce/fecshop/config/fecshop.php'),
    // fecshop module config
    require(__DIR__.'/../../vendor/fancyecommerce/fecshop/app/appserver/config/appserver.php'),

    // thrid part confing

    // common modules and services.
    require(__DIR__.'/../../common/config/fecshop_local.php'),

    // appadmin local modules and services.
    require(__DIR__.'/../config/fecshop_local.php')

);

$str = '<?php '.PHP_EOL;
$str .= 'return '.PHP_EOL;

//单个制表符用几个空格来表示
const TAB_DEFAULT_SPACES = 4;
/**
 * 获取某维的缩进空格字符串
 * @param $dimensional 维数，即当前在数组的第几层。
 * @return string 返回当前层的缩进空格的字符串
 */
function obtainSpaces($dimensional)
{
    $spaceNumber = $dimensional * TAB_DEFAULT_SPACES;
    $spaceStr = '';
    for ($index = 0; $index < $spaceNumber; $index++) {
        $spaceStr .= ' ';
    }
    return $spaceStr;
}

/**
 * @param $val 数组的键值对里的值（如果不是数组的时候的)
 * @return string 返回相应类型所对应的字符串
 */
function formatNotArray($val)
{
    if (is_string($val)) {
        return "'".$val."'";
    }
    if (is_bool($val)) {
        return $val? 'true' : 'false';
    }
    if (is_object($val)) {
        $post_log = '';
        ob_start();
        ob_implicit_flush(false);
        $func = new ReflectionFunction($val);
        $filename = $func->getFileName();
        $start_line = $func->getStartLine() - 1; // it's actually - 1, otherwise you wont get the function() block
        $end_line = $func->getEndLine();
        $length = $end_line - $start_line;
        $source = file($filename);
        $body = implode("", array_slice($source, $start_line, $length));
        echo $body;
        $post_log = ob_get_clean();
        return $post_log;
    }
    //if()
    return is_null($val)? "''" : $val;
}



/**
 * 格式化数组（格式化成字符串)
 * @param $arr 要格式化的数组
 * @param $dimensional 维度，即当前数组处于被嵌套在第几层中
 * @param $pre_sapces_str 上一维度的输出空格字符串
 * @param $curr_spaces_str 当前维度的输出空格字符串
 * @return string 数组格式化后所得字符串
 */
function formatArray($arr,$dimensional,$pre_sapces_str,$curr_spaces_str)
{
    $str = PHP_EOL.$pre_sapces_str.'['.PHP_EOL;
    $index = 1;
    foreach ($arr as $k => $v) {
        1 != $index && $str .= PHP_EOL;
        $index = -1;
        $key = is_string($k)? "'".$k."'" : $k;
        $value = '';
        if (is_array($v)) {
            $value = toPhpCode($v, $dimensional);
            $str .= $curr_spaces_str.$key.'=>'.$value.',';
        }else if(is_object($v)) {
            $value = formatNotArray($v);
            $str .= $curr_spaces_str.$value;
        }else {
            $value = formatNotArray($v);
            $str .= $curr_spaces_str.$key.'=>'.$value.',';
        }
        //$str .= $curr_spaces_str.$key.'=>'.$value.',';
    }
    $str .= PHP_EOL.$pre_sapces_str.']';
    return $str;

}

/**
 * 转成php代码
 * @param $arr 要转的数组
 * @param int $dimensional 维度，即当前数组处于被嵌套在第几层中
 * @return string 格式化后所得字符串
 */
function toPhpCode($arr, $dimensional = 0)
{
    if (!is_array($arr)) {
        return formatNotArray($arr);
    }
    $pre_sapces_str = obtainSpaces($dimensional);
    $dimensional++;
    $curr_spaces_str = obtainSpaces($dimensional);
    return formatArray($arr,$dimensional,$pre_sapces_str,$curr_spaces_str);
}

$str .= toPhpCode($config);
$str .= ';';
file_put_contents('../merge_config.php', $str);
echo 'generate merge config file success';
