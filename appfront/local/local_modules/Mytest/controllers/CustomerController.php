<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace appfront\local\local_modules\Mytest\controllers;

use fecshop\app\appfront\modules\AppfrontController;
use Yii;
use yii\web\Response;

/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */
class CustomerController extends AppfrontController
{

    public function init()
    {
        parent::init();
        //Yii::$service->page->theme->layoutFile = 'category_view.php';
    }
    
    public function actionTest(){
       // echo 2;exit; 
        $data = $this->getBlock()->getLastData();
        return $this->render($this->action->id, $data);
    }
    
    
}