<?php
require __DIR__ . '/library/DataBase.php';
require __DIR__ . '/library/View.php';

$dsn = 'mysql:host=127.0.0.1;dbname=bookshop';
$database = new DataBase($dsn, 'root', '');
$fullDB = $database->getAll();
$view = new View($fullDB);
$view->render(__DIR__ . '/library/template.php');
$view->display(__DIR__ . '/library/template.php');
