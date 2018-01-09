<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_COMPILE_WARNING ); //除去 E_NOTICE E_COMPILE_WARNING 之外的所有错误信息
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
    
    # fecshop 公用配置
    require(__DIR__ . '/../../vendor/fancyecommerce/fecshop/config/fecshop.php'),
    # fecshop 入口配置
    require(__DIR__ . '/../../vendor/fancyecommerce/fecshop/app/appapi/config/appapi.php'),
    
    # thrid part confing
    # 第三方 公用配置
    require(__DIR__ . '/../../common/config/fecshop_third.php'),
    # 第三方 入口配置
    require(__DIR__ . '/../config/fecshop_third.php'),
    
    # 本地 公用配置
    require(__DIR__ . '/../../common/config/fecshop_local.php'),
     
    # 本地 入口配置
    require(__DIR__ . '/../config/fecshop_local.php')

);

$str = '<?php '.PHP_EOL;
$str .= 'return '.PHP_EOL;

/**
 * 下面是fecshop热心用户【phoenix】优化后的代码：  http://www.fecshop.com/member/phoenix
 * 从下面开始到 `$str .= toPhpCode($config);` 代码结束部分。
 */
/**
 * 单个制表符用几个空格来表示
 */
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
 * 格式化字符串和其它非引用类型
 * @param $val 数组的键值对里的值
 * @return string 返回相应类型所对应的字符串
 */
function formatStringAndOther($val)
{
    if (is_string($val)) {
        return "'".$val."'";
    }
    if (is_bool($val)) {
        return $val? 'true' : 'false';
    }
    return is_null($val)? "''" : $val;
}

/**
 * 用ReflectionFunction来获取闭环对象所在源文件的一些信息
 * 再根据信息得到相应代码并打印到缓存中，再从缓存中返回字符串
 * @param $val 数组中键值对里的值，即要反射出原代码的闭环对象。
 * @return string 返回闭环对象对应的代码
 */
function formatClosureObject($val)
{
    $code_str = '';
    ob_start();
    ob_implicit_flush(false);
    $func = new ReflectionFunction($val);
    $filename = $func->getFileName();
    $start_line = $func->getStartLine(); //作者原来在这里“-1”很灵巧。但为可读性好一点改到下面的"+1"和"-1"了。
    $end_line = $func->getEndLine();
    $length = $end_line - $start_line + 1;
    $source = file($filename);
    $code = implode("", array_slice($source, $start_line - 1, $length));//file转成数组后行数从零开始故减一
    echo $code;
    $code_str = ob_get_clean();
    return $code_str;
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
    $eol_flag = 1;
    foreach ($arr as $k => $v) {
        1 != $eol_flag && $str .= PHP_EOL;
        $eol_flag = -1;
        $key = is_string($k) ? "'" . $k . "'" : $k;
        $value = '';
        if (is_object($v)) {
            $value = formatClosureObject($v);
            $str .= $value;
            $eol_flag = 1;
            continue;
        }
        if (is_array($v)) {
            $value = toPhpCode($v, $dimensional);
        }else{
            $value = formatStringAndOther($v);
        }
        $str .= $curr_spaces_str . $key . '=>' . $value . ',';
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
        return formatStringAndOther($arr);
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
