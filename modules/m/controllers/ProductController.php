<?php

namespace app\modules\m\controllers;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionInfo()
    {
        return $this->render('info');
    }

    public function actionOrder()
    {
        return $this->render('order');
    }

}
