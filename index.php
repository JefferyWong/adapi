<?php
require_once './vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("./docs/");
$isDevMode = true;

$config = new \Doctrine\ORM\Configuration();

$connectionParams = array(
    'dbname' => 'yii2advanced',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
    'charset' => 'utf8'
);
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$em = EntityManager::create($connectionParams, $config);


$app = new \Slim\Slim(
    array(
        "debug"=>true,
    ));


//require routes files
require_once './routes/user.php';
require_once './routes/auth.php';

$app->run();