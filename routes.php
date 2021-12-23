<?php

$url = $_SERVER['REQUEST_URI'];
$indexPhpPosition = strpos($url, 'index.php');
$baseUrl = substr($url,0,$indexPhpPosition);

$route = null;
if(false !== $indexPhpPosition) {
    $route = substr($url, $indexPhpPosition);
    $route = str_replace('index.php','',$route);
}


define('BASE_URL', $baseUrl);

if(!$route) {
    require __DIR__.'/templates/main.php';
}