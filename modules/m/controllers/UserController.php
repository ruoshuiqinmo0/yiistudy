<?php

namespace app\modules\m\controllers;

class UserController extends \yii\web\Controller
{
    public function actionAddress()
    {
        return $this->render('address');
    }

    public function actionAddressSet()
    {
        return $this->render('address_set');
    }

    public function actionBind()
    {
        return $this->render('bind');
    }

    public function actionCart()
    {
        return $this->render('cart');
    }

    public function actionComment()
    {
        return $this->render('comment');
    }

    public function actionCommentSet()
    {
        return $this->render('comment-set');
    }

    public function actionFav()
    {
        return $this->render('fav');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionOrder()
    {
        return $this->render('order');
    }

}
