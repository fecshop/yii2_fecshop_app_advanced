<?php
/**
 * 【Appserver端性能优化】：如果vue和appserver是不一样的域名，对于这种跨域的前端和后端交互，需要cros机制，具体您可以自己查阅
 * 原理为：第一次发送options请求，如果请求成功，获取服务端允许的请求类型，然后再发起具体的数据请求
 * 对于options请求，不涉及到数据，因此直接返回即可，因此下面加了下面的代码
 * 对于下面的设置的允许的值，是fecshop目前允许的，如果您添加了其他的，请在下面自行修改
 * 下面的cros的信息要和 @fecshop/app/appserver/modules/AppserverTokenController.php 这个文件里面的设置要一致。
 * 默认，下面是注释掉，您可以根据自己的情况，取消掉下面的注释，让options请求在index.php文件执行的时候直接返回，节省资源。
 */ 
/*
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    $cors_allow_headers = ['fecshop-uuid','fecshop-lang','fecshop-currency','access-token'];       
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, ".implode(', ',$cors_allow_headers));
    header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, HEAD, OPTIONS');
    exit;
}
*/
error_reporting(E_ALL & ~E_NOTICE & ~E_COMPILE_WARNING ); //除去 E_NOTICE E_COMPILE_WARNING 之外的所有错误信息
//ini_set('session.cookie_domain', '.fancyecommerce.com'); //初始化域名，
$http = ($_SERVER['SERVER_PORT'] == 443) ? 'https' : 'http';
$homeUrl = $http.'://'.$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['SCRIPT_NAME']), '\\/');
/**
 * fecshop 使用合并配置（config）数组进行加速，true 代表打开。
 * 打开配置加速开关前，您需要执行 http://domain/index-merge-config.php 进行生成单文件配置数组。
 * 注意：打开后，当您修改了配置，都需要访问一次上面的链接，重新生成单文件配置数组，否则修改的配置不会生效
 * 建议：本地开发环境关闭，开发环境如果访问量不大，关闭也行，如果访问量大，建议打开
 * 
 */
$use_merge_config_file = false; 
 
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../vendor/fancyecommerce/fecshop/yii/Yii.php');

require(__DIR__ . '/../../common/config/bootstrap.php');

require(__DIR__ . '/../config/bootstrap.php');

if($use_merge_config_file){
	$config = require('../merge_config.php');
}else{
	$config = yii\helpers\ArrayHelper::merge(
		require(__DIR__ . '/../../common/config/main.php'),
		require(__DIR__ . '/../../common/config/main-local.php'),
		require(__DIR__ . '/../config/main.php'),
		require(__DIR__ . '/../config/main-local.php'),
        
		# fecshop 公用配置
		require(__DIR__ . '/../../vendor/fancyecommerce/fecshop/config/fecshop.php'),
		# fecshop 入口配置
		require(__DIR__ . '/../../vendor/fancyecommerce/fecshop/app/appserver/config/appserver.php'),
		
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
}

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
