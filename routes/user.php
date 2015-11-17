<?php
use App\Lib\Util;
use App\Model\User;
use App\Model\UserInfo;

//用户信息完善
$app->post('/userinfo/:user_id', $check_auth($em), function($user_id) use($app, $em){
	//TODO: Complete user info.
	$avatar = "";
	if ($_FILES['avatar']){
	    //TODO:upload avatar
	}
	$address               = $app->request->params('address');
	$religion              = $app->request->params('religion');
	$bloodtype             = $app->request->params('bloodtype');
	$tall                  = $app->request->params('tall');
	$weight                = $app->request->params('weight');
	$is_have_baby          = $app->request->params('is_have_baby');
	$is_married            = $app->request->params('is_married');
	$work                  = $app->request->params('work');
	$income                = $app->request->params('income');
	$is_accept_ad_money    = $app->request->params('is_accept_ad_money');
	$habits                = $app->request->params('habits');
	$online_shop_type      = $app->request->params('online_shop_type');
	$food_habits           = $app->request->params('food_habits');
	$car_info              = $app->request->params('car_info');
	
	$user_info = $em->getRepository('App\Model\Userinfo', $$user_id);
	if (!$user_info){
	    $user_info = new UserInfo();
	}
	if ($address != ''){
	    $user_info->setAddress($address);
	}
	if ($religion != ''){
	    $user_info->setReligion($religion);
	}
	if ($bloodtype != ''){
	    $user_info->setBloodtype($bloodtype);
	}
	if ($tall != ''){
	    $user_info->setTall($tall);
	}
	if ($weight != ''){
	    $user_info->setWeight($weight);
	}
	if ($is_have_baby != ''){
	    $user_info->setIs_have_baby($is_have_baby);
	}
	if ($is_married != ''){
	    $user_info->setIs_married($is_married);
	}
	if ($work != ''){
	    $user_info->setWork($work);
	}
	if ($income != ''){
	    $user_info->setIncome($income);
	}
	if ($is_accept_ad_money != ''){
	    $user_info->setIs_accept_ad_money($is_accept_ad_money);
	}
	if ($habits != ''){
	    $user_info->setHabits($habits);
	}
	if ($online_shop_type != ''){
	    $user_info->setOnline_shop_type($online_shop_type);
	}
	if ($food_habits) {
	    $user_info->setFood_habits($food_habits);
	}
	if ($car_info) {
	    $user_info->setCar_info($car_info);
	}
	try {
	    $em->persist($user_info);
	    $em->flush($user_info);
	    $app->response->headers->set('Content-Type', 'application/json');
	    echo Util::resPonseJson($app, 200, ".", array());
	    exit;
	} catch (Exception $e){
	    $app->response->headers->set('Content-Type', 'application/json');
	    echo Util::resPonseJson($app, 500, "System error.", array());
	    exit;
	}
	exit;
});

$app->get('/userinfo/:user_id', $check_auth($em), function($user_id) use($app, $em){
    echo $systemid;
    exit;
});
