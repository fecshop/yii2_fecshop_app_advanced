<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace appadmin\assets;

use yii\web\AssetBundle;
use common\helpers\CUrl;
/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
	public $css = [];
	public $js = [];
	/*
    public $css = [
        'css/site.css',
		
		CUrl::getSkinUrl('css/styles.css',true),
		CUrl::getSkinUrl('syntaxhighlighter/styles/shCore.css',true),
		CUrl::getSkinUrl('syntaxhighlighter/styles/shThemeDefault.css',true),
		CUrl::getSkinUrl('css/styles.css',true),
		CUrl::getSkinUrl('css/styles.css',true),
		CUrl::getSkinUrl('css/styles.css',true),
		CUrl::getSkinUrl('css/styles.css',true),
		
    ];
    public $js = [
	
		CUrl::getSkinUrl('syntaxhighlighter/scripts/shCore.js',true),
		CUrl::getSkinUrl('syntaxhighlighter/scripts/shBrushCss.js',true),
		CUrl::getSkinUrl('syntaxhighlighter/scripts/shBrushJScript.js',true),
		CUrl::getSkinUrl('syntaxhighlighter/scripts/shBrushPhp.js',true),
		CUrl::getSkinUrl('js/custom.js',true),
		
    ];
	*/
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
