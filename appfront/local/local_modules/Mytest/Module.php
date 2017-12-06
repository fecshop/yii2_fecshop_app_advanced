<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace appfront\local\local_modules\Mytest;

use fecshop\app\appfront\modules\AppfrontModule;
use Yii;

/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */
class Module extends AppfrontModule
{
    public $blockNamespace;

    public function init()
    {
        //echo 1;exit;
        // 以下代码必须指定
        $nameSpace = __NAMESPACE__;
        // web controller
        if (Yii::$app instanceof \yii\web\Application) {
            $this->controllerNamespace = $nameSpace . '\\controllers';
            $this->blockNamespace = $nameSpace . '\\block';
        }
        Yii::$service->page->theme->layoutFile = 'main.php';
        parent::init();
    }
}
