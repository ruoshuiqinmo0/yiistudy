<?php

namespace app\modules\web\controllers;

class UserController extends \yii\web\Controller
{
    public function actionEdit()
    {
        return $this->render('edit');
    }

    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionResetPwd()
    {
        return $this->render('reset-pwd');
    }

}
