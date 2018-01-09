<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_COMPILE_WARNING ); //除去 E_NOTICE E_COMPILE_WARNING 之外的所有错误信息
#ini_set('session.cookie_domain', '.fancyecommerce.com'); //初始化域名，
$http = ($_SERVER['SERVER_PORT'] == 443) ? 'https' : 'http';
$homeUrl = $http.'://'.$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['SCRIPT_NAME']), '\\/');

defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../vendor/fancyecommerce/fecshop/yii/Yii.php');
require(__DIR__ . '/../../common/config/bootstrap.php');
require(__DIR__ . '/../config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../common/config/main.php'),
    require(__DIR__ . '/../../common/config/main-local.php'),
    require(__DIR__ . '/../config/main.php'),
    require(__DIR__ . '/../config/main-local.php'),
    
	# fecshop 公用配置
	require(__DIR__ . '/../../vendor/fancyecommerce/fecshop/config/fecshop.php'),
	# fecshop 入口配置
	require(__DIR__ . '/../../vendor/fancyecommerce/fecshop/app/appadmin/config/appadmin.php'),
	
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

$config['homeUrl'] = $homeUrl;

/**
 * yii class Map Custom 
 */ 
$yiiClassMap = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../config/YiiClassMap.php'),
    require(__DIR__ . '/../../common/config/YiiClassMap.php')
);
if(is_array($yiiClassMap) && !empty($yiiClassMap)){
	foreach($yiiClassMap as $namespace => $filePath){
		Yii::$classMap[$namespace] = $filePath;
	}
}

/**
 * Yii 重写block controller model等
 * 也就是说：除了compoent 和services，其他的用RewriteMap的方式来实现重写
 * 重写的类可以集成被重写的类
 */ 
$yiiRewriteMap = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../config/YiiRewriteMap.php'),
    require(__DIR__ . '/../../common/config/YiiRewriteMap.php')
);
if(is_array($yiiRewriteMap) && !empty($yiiRewriteMap)){
	Yii::$rewriteMap = $yiiRewriteMap;
}

/**
 * 添加fecshop的服务 ，Yii::$service  ,  将services的配置添加到这个对象。
 * 使用方法：Yii::$service->cms->article;
 * 上面的例子就是获取cms服务的子服务article。
 */
new fecshop\services\Application($config['services']);
unset($config['services']);

$application = new yii\web\Application($config);
$application->run();






