<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace appfront\local\local_modules\Mytest\block\customer;

use Yii;
use yii\base\InvalidValueException;

/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */
class Test
{

    public function getLastData()
    {
        
        return ['name' => 'zhangsan'];
    }
}