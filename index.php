<?php
require_once './vendor/autoload.php';

use \BenGee\Slim\Db\SlimORM;


//Doctrine config
$path = array("./entityfiles");
$isDevMode = true;
$dbParams = array
    (
        SlimORM::CONNECTIONS => array
        (
            SlimORM::DEFAULT_CNX => array
            (
                SlimORM::DSN => 'mysql:host=localhost;port=3306;dbname=yii2advanced',
                SlimORM::USR => 'root',
                SlimORM::PWD => '',
                SlimORM::OPT => null
            ),
        )
    );

//$app initialize
$app = new \Slim\Slim($dbParams);

SlimORM::register($app);

//require routes files
require_once './routes/user.php';

$app->run();