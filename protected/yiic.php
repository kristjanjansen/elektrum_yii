<?php

require __DIR__ . '/../vendor/autoload.php';

$loader = new Loader;
$loader->loadEnvironment();
$loader->loadDatabase();

$yiic=dirname(__FILE__).'/../vendor/yiisoft/yii/framework/yiic.php';
$config=dirname(__FILE__).'/config/console.php';

require_once($yiic);
