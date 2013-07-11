<?php

/*
 *
 * Company Intranet
 * @company Frenzel GmbH
 * @copy    Frenzel GmbH 2013
 * @contact philipp@frenzel.net
 *
 */

//Set the default time zone to europe/berlin
ini_set('date.timezone','Europe/Berlin');

if (function_exists('date_default_timezone_set')) {
	date_default_timezone_set('Europe/Berlin');
}

function includeIfExists($file)
{
	if(file_exists($file)) {
		return include $file;
	}
}

// comment out the following line to disable debug mode
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require_once(__DIR__ . '/../vendor/yiisoft/yii2/yii/Yii.php');
require_once(__DIR__ . '/../vendor/autoload.php');

Yii::setAlias('@yiidhtmlx', __DIR__ . '/../vendor/philippfrenzel/yiidhtmlx/yiidhtmlx/');
Yii::setAlias('@yii2tooltipster', __DIR__ . '/../vendor/philippfrenzel/yii2tooltipster/yii2tooltipster/');
Yii::setAlias('@yiimetroui', __DIR__ . '/../vendor/philippfrenzel/yiimetroui/yiimetroui/');
Yii::setAlias('@yiijquerytoc', __DIR__ . '/../vendor/philippfrenzel/yiijquerytoc/yiijquerytoc/');
Yii::setAlias('@yiiwymeditor', __DIR__ . '/../vendor/philippfrenzel/yiiwymeditor/yiiwymeditor/');
Yii::setAlias('@yii/jui', __DIR__ . '/../vendor/yiisoft/yii2-jui/yii/jui/');

//adding elfinder
Yii::setAlias('@yii2elfinder', __DIR__ . '/../vendor/philippfrenzel/yii2elfinder/yii2elfinder/');

Yii::$classMap['SebastianBergmann\Diff'] = __DIR__ . '/../vendor/sebastian/diff/src/Diff.php';

if(($baseConfig = includeIfExists(__DIR__.'/../app/config/main.php')) && ($localConfig = includeIfExists(__DIR__.'/../app/config/local.php'))) {
	$config = \yii\helpers\ArrayHelper::merge($baseConfig,$localConfig);
} else {
	$config = $baseConfig;
}

$application = new yii\web\Application($config);
return $application->run();
