<?php
//FRONT CONTROLLER

// 1. Общие настройки
   ini_set('display_errors', 1);
   error_reporting(E_ALL);

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
include_once ROOT."/components/db.php";
include_once ROOT."/components/Router.php";


$config = include ROOT."/config/params.php";

// 3. Установка соединения с БД
$connection = Db::getConnection($config);

// 4. Вызов Router


$router = new Router();
$router->run();






