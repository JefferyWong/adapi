<?php
//用户注册
$app->post('/signin', function () use ($app, $em){
    $systemId = $app->request->post("system_id");
    $password = $app->request->post("password");
    $username = $app->request->post("username");
//     $existeSystemId = $em->createQuery('SELECT u FROM App\Model\User u WHERE u.system_id = '.$systemId);
    $existSystemId = $em->createQueryBuilder()
        ->select("*")
        ->from("App\Model\User", 'u')
        ->where("u.system_id = ?1")
        ->setParameter(1, $systemId)
        ->getQuery()
        ->getSingleResult();
    if ($existSystemId) {
        //TODO:return error message.
    }
    
    //TODO:save new User.
});

$app->post('/login', function() use($app, $em){
    $system_id = $app->post('system_id');
    $username = $app->request->post("username");
    $password = $app->post('password');
    
    $user = $em->createQueryBuilder()
        ->select("*")
        ->from("App\Model\User", 'u')
        ->where("u.system_id = ?1 or u.username=?2")
        ->setParameters(array(1=>$system_id, 2=>$username))
        ->getQuery()
        ->getSingleResult();
    if (!$user) {
        //TODO:return user not existe error.
    }
    if ($password == $user['password']){
        //TODO:return success status with auth token.
    }
});