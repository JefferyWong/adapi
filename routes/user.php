<?php

$app->get('/', function() use($app, $em){
	$responseBody = $em->createQuery('SELECT u FROM App\Model\User u');
	$app->response->headers->set('Content-Type', 'application/json');
	$app->response->setBody(json_encode($responseBody));
});