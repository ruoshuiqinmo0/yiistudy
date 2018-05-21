<?php

namespace app\modules\web\controllers;

class BrandController extends \yii\web\Controller
{
    public function actionImages()
    {
        return $this->render('images');
    }

    public function actionInfo()
    {
        return $this->render('info');
    }

    public function actionSet()
    {
        return $this->render('set');
    }

}
