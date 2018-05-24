<?php

namespace app\modules\web\controllers;
use Yii;

class BookController extends \yii\web\Controller
{

	public $modelClass = "app\models\book";
	'adadsadqdweqwewqe'
    public function actionImages()
    {
    	$nickname = Yii::$app->request->get('name', '');

        return $this->render('images');
    }

    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionInfo()
    {
        return $this->render('info');
    }

    public function actionSet()
    {
        return $this->render('set');
    }

    public function actionCat()
    {
        return $this->render('cat');
    }

    public function actionCat_set()
    {
        return $this->render('cat_set');
    }

}
