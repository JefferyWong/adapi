<?php

$app->get('/', function() use($app){
	$responseBody = $app->db->table('user')->find_many();
	$app->response->headers->set('Content-Type', 'application/json');
	$app->response->setBody(json_encode($responseBody));
});