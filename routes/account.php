<?php
use App\Lib\Util;
use App\Model\BankCard;

$app->post('/account/bank_card/bind', $check_auth($em), function () use($app, $em){
   $flash = $app->flashData();
   $user_id = isset($flash['user_id']) ? $flash['user_id'] : '';
   $card_number = $app->request->params('card_number');
   $card_bank = $app->request->params('card_bank');
   $bankCard = $em->getRepository('App\Model\BankCard')->findOneBy(array('card_number'=>$card_number));
   if ($bankCard){
       $app->response->headers->set('Content-Type', 'application/json');
       echo Util::resPonseJson($app, 5002, "Card Has been bind.", array());
       exit;
   }
   
   $newBankCard = new BankCard();
   $newBankCard->setCard_number($card_number);
   $newBankCard->setCard_bank($card_bank);
   $newBankCard->setUser_id($user_id);
   try {
       $em->persist($newBankCard);
       $em->flush();
       $app->response->headers->set('Content-Type', 'application/json');
       echo Util::resPonseJson($app, 200, "", array());
       exit;
   } catch (Exception $e) {
       $app->response->headers->set('Content-Type', 'application/json');
       echo Util::resPonseJson($app, 5000, "System error", array());
       exit;
   }
});

$app->post('/account/payment_password', $check_auth($em), function () use ($app, $em){
   $payment_password = $app->request->params('payment_password');
   $flash = $app->flashData();
   $user_id = isset($flash['user_id']) ? $flash['user_id'] : '';
   $user = $em->getRepository('App\Model\User')->find($user_id);
   if (!$user){
       $app->response->headers->set('Content-Type', 'application/json');
       echo Util::resPonseJson($app, 40004, "User not exists.", array());
       exit;
   }
   $user->setPayment_password(password_hash($payment_password, PASSWORD_BCRYPT));
   try {
       $em->persist($user);
       $em->flush();
       $app->response->headers->set('Content-Type', 'application/json');
       echo Util::resPonseJson($app, 200, "", array());
       exit;
   } catch (Exception $e) {
       $app->response->headers->set('Content-Type', 'application/json');
       echo Util::resPonseJson($app, 500, "System Error", array());
       exit;
   }
});