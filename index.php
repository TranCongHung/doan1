<?php
//http://localhost:8080/mvc-doan/index.php?controller=homecontroller&page=home
session_start();
require_once './controller/Controller.php';
require_once './Helpers/functions.php';

$controller = new Controller();
$controller->invoke();
?>