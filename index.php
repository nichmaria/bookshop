<?php

require __DIR__ . '/classes/DataBase.php';
require __DIR__ . '/classes/View.php';
require __DIR__ . '/classes/BookStorage.php';

$dsn = 'mysql:host=127.0.0.1;dbname=bookshop';
$database = new DataBase($dsn, 'root', '');
$bookData = $database->getAllBooks();
$bookStorage = new BookStorage($bookData);
$books = $bookStorage->getBooks();

$data = ['books' => $books, 'feedback' => 0];

$view = new View();
$view->render(__DIR__ . '/templates/mainpage.php', $data);
$view->display(__DIR__ . '/templates/mainpage.php', $data);
