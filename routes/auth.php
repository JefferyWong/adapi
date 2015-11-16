<?php
use App\Lib\Util;
use App\Model\User;

//用户注册
$app->post('/signin', function() use($app, $em){
    $systemId = $app->request->params("system_id");
    $password = $app->request->params("password");
    $username = $app->request->params("username");
    if ($password == '' || $password == null || $systemId == "" || $systemId == null || $username == "" | $username == null) {
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 4000, "Invalid params", array());
        exit();
    }
//     $existeSystemId = $em->createQuery('SELECT u FROM App\Model\User u WHERE u.system_id = '.$systemId);
    $existSystemId = $em->createQueryBuilder()
        ->select('u')
        ->from('App\Model\User', 'u')
        ->where('u.system_id = ?1 or u.username=?2')
        ->setParameters(array(1=>$systemId, 2=>$username))
        ->getQuery()
        ->getArrayResult();
    if ($existSystemId) {
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 4001, "User has existed", array());
        exit;
    }
    
    $user = new User();
    $user->setSystem_id($systemId);
    $user->setUsername($username);
    $user->setPassword_hash(password_hash($password, PASSWORD_BCRYPT));
    $user->setEmail("");
    $user->setStatus(1);
    $user->setCreated_at(time());
    $user->setUpdated_at(time());
    $user->setPayment_password("");
    $em->persist($user);
    $em->flush();
    
    $app->response->headers->set('Content-Type', 'application/json');
    echo Util::resPonseJson($app, 200, "Register success", array());
    exit;
});

$app->post('/login', function() use($app, $em){
    $system_id = $app->request->post('system_id');
    $username = $app->request->post("username");
    $password = $app->request->post('password');
    
    if ($password == '' || $password == null || ($systemId == "" || $systemId == null) && ($username == "" | $username == null)) {
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 4000, "Invalid params", array());
        exit();
    }
    
    try {
    $user = $em->createQueryBuilder()
        ->select("u")
        ->from("App\Model\User", 'u')
        ->where("u.system_id = ?1 or u.username=?2")
        ->setParameters(array(1=>$system_id, 2=>$username))
        ->getQuery()
        ->getSingleResult();
    } catch (\Doctrine\ORM\NoResultException $e) {
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 4004, "User not found", array());
        exit;
    } 

    if (password_verify($password, $user->getPassword_hash()) ){
        $token = password_hash(strval(time()), PASSWORD_BCRYPT);
        $user->setToken($token);
        $em->flush($user);
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 200, "Login success.", array('token'=>$token));
        exit;
    } else {
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 4001, "Authenation failed.", array());
        exit;
    }
});