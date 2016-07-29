<?php
//$secure = isset($_SERVER['HTTPS']) && (strcasecmp($_SERVER['HTTPS'], 'on') === 0 || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strcasecmp($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') === 0;

$secure = 0;
$http = $secure ? 'https' : 'http';
$homeUrl = $http.'://'.$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['SCRIPT_NAME']), '\\/');

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../vendor/fancyecommerce/fecshop/yii/Yii.php');
require(__DIR__ . '/../../common/config/bootstrap.php');
require(__DIR__ . '/../config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../common/config/main.php'),
    require(__DIR__ . '/../../common/config/main-local.php'),
    require(__DIR__ . '/../config/main.php'),
    require(__DIR__ . '/../config/main-local.php'),
	# fecshop base
	require(__DIR__ . '/../../vendor/fancyecommerce/fecshop/config/fecshop.php'),
	# fecshop module base
	require(__DIR__ . '/../../vendor/fancyecommerce/fecshop/app/appapi/config/appapi.php'),
	
	# thrid part confing
	
	# user local config.
	require(__DIR__ . '/../config/fecshop_local.php')
    
);

$config['homeUrl'] = $homeUrl;
# 给予单独的配置文件，用于service配置
# 然后将services下面的$app都改成$service.
# echo Yii::$service->cmstest->article->storage;exit;
# 对于其他的地方都要进行这样的修改才行。

new fecshop\services\Application($config['services']);
unset($config['services']);
//var_dump($config);
$application = new yii\web\Application($config);
$application->run();






