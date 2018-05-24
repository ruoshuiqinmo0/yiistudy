<?php

namespace app\modules\m\controllers;

class PayController extends \yii\web\Controller
{
    public function actionBuy()
    {
        return $this->render('buy');
    }

}
