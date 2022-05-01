<?php
require __DIR__ . '/library/DataBase.php';
require __DIR__ . '/library/View.php';
require __DIR__ . '/library/Book.php';

$dsn = 'mysql:host=127.0.0.1;dbname=bookshop';
$database = new DataBase($dsn, 'root', '');
$fullDB = $database->getAll();
$books = new Book($fullDB);
$booksinfo = $books->getBooksInfo();

$view = new View();
$view->render(__DIR__ . '/template.php', $booksinfo);
$view->display(__DIR__ . '/template.php', $booksinfo);
