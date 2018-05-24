<?php
namespace app\common\components;
use yii\web\Controller;

class BaseWebController   extends Controller{

	public $enableCsrfValidation  = false;

	public function get($key,$default =''){
		return \Yii::$app->request->get($key,$default);
	}

	public function post($key,$default =''){
		return \Yii::$app->request->post($key,$default);
	}

	public function setCookie($key,$value ='',$expire = 0){
		$cookies =  \Yii::$app->response->cookies;
		$cookies->add(new \yii\web\Cookie([
				'name'=>$name,
				'value'=>$value,
				'expire'=>$expire
		]));
	}

}