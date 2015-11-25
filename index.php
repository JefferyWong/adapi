<?php
session_cache_limiter(false);
session_start();
require_once './vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use App\Lib\Util;

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

// $connectionParams = array(
//     'dbname' => 'adapi',
//     'user' => 'root',
//     'password' => '1qazXSW@',
//     'host' => '192.168.99.100',
//     'driver' => 'pdo_mysql',
//     'charset' => 'utf8'
// );
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$em = EntityManager::create($connectionParams, $config);


$app = new \Slim\Slim(
    array(
        "debug"             => true,
        "templates.path"    => "./admin/templates",
    ));

$check_auth = function ($em){
    return function () use ($em) {
        $app = \Slim\Slim::getInstance();
        $token = $app->request->headers("Auth-Token");
        $user = $em->getRepository('App\Model\User')->findOneBy(array('token'=>$token));
        if (!$user){
            $app->response->headers->set('Content-Type', 'application/json');
            echo Util::resPonseJson($app, 4003, "Authenation denied", array());
            exit;
        }
        $app->flashNow('user_id', $user->getId());
    };
};

//require routes files
require_once './routes/user.php';
require_once './routes/auth.php';
require_once './routes/account.php';

//require admin routes files
require_once './admin/routes/index.php';
require_once './admin/routes/ad.php';

$app->run();