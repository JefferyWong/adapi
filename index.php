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
    'charset' => 'utf-8'
);
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$em = EntityManager::create($connectionParams, $config);

//Doctrine config
// $path = array("./entityfiles");
// $isDevMode = true;
// $dbParams = array
//     (
//         SlimORM::CONNECTIONS => array
//         (
//             SlimORM::DEFAULT_CNX => array
//             (
//                 SlimORM::DSN => 'mysql:host=localhost;port=3306;dbname=yii2advanced',
//                 SlimORM::USR => 'root',
//                 SlimORM::PWD => '',
//                 SlimORM::OPT => null
//             ),
//         )
//     );

//$app initialize
$app = new \Slim\Slim(
    array(
        "debug"=>true,
    ));

// SlimORM::register($app);

//require routes files
require_once './routes/user.php';

$app->run();