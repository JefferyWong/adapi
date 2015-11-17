<?php
use App\Lib\Util;
use App\Model\User;
use App\Model\UserInfo;

//用户信息完善
$app->post('/userinfo/:systemid', $check_auth($em), function($systemid) use($app, $em){
	//TODO: Complete user info.
	echo $systemid;
	exit;
});

$app->get('/userinfo/:systemid', $check_auth($em), function($systemid) use($app, $em){
    echo $systemid;
    exit;
});
