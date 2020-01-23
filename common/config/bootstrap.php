<?php

Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@console', dirname(dirname(__DIR__)).'/console');
Yii::setAlias('@appadmin', dirname(dirname(__DIR__)).'/appadmin');
Yii::setAlias('@appbdmin', dirname(dirname(__DIR__)).'/appbdmin');
Yii::setAlias('@appfront', dirname(dirname(__DIR__)).'/appfront');
Yii::setAlias('@apphtml5', dirname(dirname(__DIR__)).'/apphtml5');
Yii::setAlias('@appserver', dirname(dirname(__DIR__)).'/appserver');
Yii::setAlias('@appapi', dirname(dirname(__DIR__)).'/appapi');
Yii::setAlias('@appimage', dirname(dirname(__DIR__)).'/appimage');
//Yii::setAlias('@Facebook', dirname(dirname(__DIR__)).'/vendor/fancyecommerce/fecshop/lib/Facebook');
Yii::setAlias('@google', dirname(dirname(__DIR__)) . '/vendor/fancyecommerce/fecshop/lib/google');
// $fecmall_common_main_local_config为index.php的变量。是db 组件的配置。
Yii::setAlias('@addons', dirname(dirname(__DIR__)).'/addons');

// 下面的代码部分为：命令行执行sql初始化，不加载应用插件部分。
$is_install = false;
if (isset($argv) && is_array($argv)) {
    foreach ($argv as $av) {
        if ($av == '--migrationPath=@fecshop/migrations/mysqldb') {
            $is_install = true; 
            break;
        }
    }
}  

if (!$is_install) {
    $dbConfig = isset($fecmall_common_main_local_config['components']['db']) ? $fecmall_common_main_local_config['components']['db'] : '';
    if (is_array($dbConfig) && !empty($dbConfig)) {
        $connection = Yii::createObject($dbConfig);
        $command = $connection->createCommand('SELECT * FROM  extensions where  status=:status AND installed_status=:installed_status ORDER BY priority ASC ');
        $command->bindValue(':status', 1);
        $command->bindValue(':installed_status', 1);
        $fecmall_db_extensions_data = $command->queryAll();
    }
}

