<?php

require __DIR__ . '/classes/DataBase.php';
require __DIR__ . '/classes/View.php';
require __DIR__ . '/classes/BookStorage.php';

$dsn = 'mysql:host=127.0.0.1;dbname=bookshop';
$database = new DataBase($dsn, 'root', '');
$bookData = $database->getAll();
$bookStorage = new BookStorage($bookData);
$book = $bookStorage->getBookById((int)$_GET['id']);

$feedback = $database->getFeedback((int)$_GET['id']);
//var_dump($feedback);
$data = ['book' => $book, 'feedback' => $feedback];

$view = new View();

$view->render(__DIR__ . '/templates/bookpage.php', $data);
$view->display(__DIR__ . '/templates/bookpage.php', $data);
