<?php

use app\controllers\HomeController;
use app\controllers\ProprioController;

$app->get('/', HomeController::class . ":home");
$app->get('/listaproprio', ProprioController::class . ":listaproprio");
$app->get('/proprio', ProprioController::class . ":proprio");
$app->post('/controleproprio', ProprioController::class . ":controle");
