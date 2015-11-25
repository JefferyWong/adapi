<?php

$app->get('/', function () use($app){
   echo "Hello admin"; 
});

$app->get('/admin/login', function () use($app){
    $app->render("login.php");
});