<?php

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

date_default_timezone_set("America/Sao_Paulo");

$path =explode("/", $_GET['path']);

var_dump($path);
?>