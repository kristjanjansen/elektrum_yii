<?php

require __DIR__ . '/../vendor/autoload.php';

$loader = new Loader;
$loader->loadEnvironment();
$loader->loadDatabase();

$yii=dirname(__FILE__).'/../vendor/yiisoft/yii/framework/yii.php';
$config=dirname(__FILE__).'/../protected/config/main.php';

require_once($yii);
Yii::createWebApplication($config)->run();
