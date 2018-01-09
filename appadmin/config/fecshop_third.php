<?php
/**
 * FecShop file.
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

/**
 * 本文件在app/web/index.php 处引入。
 * 本配置文件为第三方插件库包的配置文件
 */
$third_config = [];
$current_app_name = 'appadmin';
$third_config_file = glob(__DIR__.'/../../common/config/fecshop_third_extensions/*.php');
if (is_array($third_config_file) && !empty($third_config_file)) {
    sort($third_config_file);
    foreach ($third_config_file as $filename) {
        $c = require($filename);
        $extension_enable = isset($c['enable']) ? $c['enable'] : false;
        if ($extension_enable) {
            $curr_config = isset($c['app'][$current_app_name]) ? $c['app'][$current_app_name] : false;
            $app_enable = isset($curr_config['enable']) ? $curr_config['enable'] : false;
            $app_config = isset($curr_config['config']) ? $curr_config['config'] : false;
            if ($app_enable && is_array($app_config) && !empty($app_config)) {
                $third_config = array_merge($third_config, $app_config);
            }
        }
    }
}
return $third_config;
