<?php

namespace app\modules\web\controllers;

class BaseController extends \yii\web\Controller
{
    public function actionGet()
    {
        return $this->render('get');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPost()
    {
        return $this->render('post');
    }

    public function actionRemCookie()
    {
        return $this->render('rem-cookie');
    }

}
