<?php

use Core\Application;

define('BASE_PATH', __DIR__);

ini_set("log_errors", true);
ini_set('error_log', BASE_PATH.'/logs/app.log');

require __DIR__.'/../vendor/autoload.php';

$app = (new Application())->make();
//env('db');
//$app->run();
