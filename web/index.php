<?php
require_once __DIR__.'/../vendor/autoload.php'; 

date_default_timezone_set('Europe/Madrid');

$app = new Silex\Application(); 

require __DIR__ . '/../src/app.php';

$app->run();