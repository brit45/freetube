<?php 
require '../vendor/autoload.php';

use APP\App;

$app = new App();

$app->Handle();

dd($app);