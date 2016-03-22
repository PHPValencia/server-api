<?php
require_once __DIR__.'/vendor/autoload.php'; 

date_default_timezone_set('Europe/Madrid');

$app = new Silex\Application(); 

$app->get('/', function() use($app) { 
    return 'PHP Valencia API '; 
}); 

$app->run(); 