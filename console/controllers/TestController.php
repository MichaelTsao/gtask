<?php
/**
 * Created by PhpStorm.
 * User: caoxiang
 * Date: 2017/12/8
 * Time: 下午2:38
 */

namespace console\controllers;

use common\models\weixin\WeixinBizData;
use Yii;

class TestController extends \yii\console\Controller
{
    public function actionIndex()
    {
        $pc = new WeixinBizData(Yii::$app->params['weixinId'], 'abc');
    }
}