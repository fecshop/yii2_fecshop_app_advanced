<?php
namespace appadmin\controllers;
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use fecshop\models\mongodb\UrlRewrite;
/**
 * Site controller
 */
class ProductController extends Controller
{
   

    public function actionIndex()
    {
		
		$old = '/www/web/develop/fecshop/appadmin/web/media/1111.png';
		$new = '/www/web/develop/fecshop/appadmin/web/media/222.png';
		$water = '/www/web/develop/fecshop/appadmin/web/media/water.png';
		\fec\helpers\CImage::saveResizeMiddleWaterImg($old,$new,[166,400],$water);
		
		//$d = UrlRewrite::getCollection()->find();
		//echo 'product/index';
		//echo \fec\helpers\CRequest::get('_id');
		//$coll = UrlRewrite::find()
		//	->all();
		//var_dump($coll);
		//Yii::$app->product->setCurrentProductId(333);
		//echo Yii::$app->product->getCurrentProductId() ;
		//Yii::$app->product->info->getProduct();
		//exit;
		//echo Yii::$app->product->image->getProductImage();
		//echo Yii::$app->product->image->getImageBasePath();
        //echo Yii::$app->product->bestSell->getCategoryProduct();
		/**
		 * session
		$product = [
			'id' => 44,
			'sku'=> 'ttt',
			'image' => '/xx/tt/dfas/dsd.jpg',
			'name' => 'xxxxx',
		];
		Yii::$app->product->viewLog->session->setHistory($product);
		$history = Yii::$app->product->viewLog->session->getHistory();
		var_dump($history);
		
		 */
		 
		# product 
		$product = [
			'id' 		=> 44,
			'sku'		=> 'ttt',
			'image' 	=> '/xx/tt/dfas/dsd.jpg',
			'name' 		=> 'xxxxx',
			'user_id' 	=> 22,
		];
				Yii::$app->product->viewLog->session->setHistory($product);
		$d = 	Yii::$app->product->viewLog->session->getHistory();
		var_dump($d);
		exit;
    }

}
