<?php
use App\Lib\Util;
use App\Model\User;

//用户注册
$app->post('/auth/signin', function() use($app, $em){
    
    $systemId   = $app->request->params("system_id");
    $password   = $app->request->params("password");
    $username   = $app->request->params("username");
    $id_number  = $app->request->params("id_number");
    $phone      = $app->request->params("phone");
    $inviter    = $app->request->params("inviter");
    $birthday   = $app->request->params("birthday");
    $sex        = $app->request->params("sex");
    $home_town  = $app->request->params("home_town");
    $nation     = $app->request->params("nation");
    
    if ($systemId == '' || $systemId == null) {
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 4000, "system_id cannot be null", array());
        exit();
    }
    if ($password == '' || $password == null) {
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 4000, "password cannot be null", array());
        exit();
    }
    if ($username == '' || $username == null) {
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 4000, "username cannot be null", array());
        exit();
    }
    if ($id_number == '' || $id_number == null) {
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 4000, "id_number cannot be null", array());
        exit();
    }
    if ($phone == '' || $phone == null) {
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 4000, "phone cannot be null", array());
        exit();
    }
    if ($birthday == '' || $birthday == null) {
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 4000, "birthday cannot be null", array());
        exit();
    }
    if ($sex == '' || $sex == null) {
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 4000, "sex cannot be null", array());
        exit();
    }
    if ($home_town == '' || $home_town == null) {
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 4000, "home_town cannot be null", array());
        exit();
    }
    if ($nation == '' || $nation == null) {
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 4000, "nation cannot be null", array());
        exit();
    }
//     $existeSystemId = $em->createQuery('SELECT u FROM App\Model\User u WHERE u.system_id = '.$systemId);
    $existSystemId = $em->getRepository('App\Model\User')->findOneBy(array('system_id'=>$systemId));
    if ($existSystemId) {
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 4001, "User has existed", array());
        exit;
    }
    
    $user = new User();
    $user->setSystem_id($systemId);
    $user->setUsername($username);
    $user->setPassword_hash(password_hash($password, PASSWORD_BCRYPT));
    $user->setBirthday(strtotime($birthday));
    $user->setHome_town($home_town);
    $user->setId_number($id_number);
    $user->setNation($nation);
    $user->setPhone($phone);
    $user->setInviter($inviter);
    $user->setSex($sex);
    $user->setStatus(1);
    $user->setCreated_at(time());
    $user->setUpdated_at(time());
    $user->setPayment_password("");
    try {
        $em->persist($user);
        $em->flush();
    } catch(Execption $e){
        $app->response->headers->set('Content-Type', 'application/json');
        echo Util::resPonseJson($app, 500, "System error", array());
        exit;
    }
    
    $app->response->headers->set('Content-Type', 'application/json');
    echo Util::resPonseJson($app, 200, "Register success", array());
    exit;
});

$app->post('/auth/login', function() use($app, $em){
    $system_id = $app->request->post('system_id');
    $username = $app->request->post("username");
    $password = $app->request->post('password');
    
    if ($password == '' || $password == null || ($system_id == "" || $system_id == null) && ($username == "" | $username == null)) {
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

$app->get('/phpinfo', function() use ($app){
   echo phpinfo();
});