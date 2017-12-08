<?php
/**
 * Created by PhpStorm.
 * User: caoxiang
 * Date: 2017/12/8
 * Time: 下午2:38
 */

namespace console\controllers;

use Yii;

class TestController extends \yii\console\Controller
{
    public function actionIndex()
    {
        Yii::$app->redis->set('a', 1);
    }
}