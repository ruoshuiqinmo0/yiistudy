<?php
/**
 * @link http://www.yiiframework.com/
* @copyright Copyright (c) 2008 Yii Software LLC
* @license http://www.yiiframework.com/license/
*/

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author jiang <qiang.xue@gmail.com>
 * @since 2.0
 */
class WebAsset extends AssetBundle
{




	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
			'css/web/bootstrap.min.css',
			'font-awesome/css/font-awesome.css',
			'css/web/style.css'
	];
	public $js = [
	];
}
