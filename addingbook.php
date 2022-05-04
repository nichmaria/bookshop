<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Adding new book</h3>
    <form action="addingbook.php" method="post">
        <input type="string" value="title" name="title" class="search">
        <input type="string" value="author" name="author" class="search">
        <input type="string" value="description" name="description" class="search">
        <input type="string" value="price" name="price" class="search">
        <input type="string" value="image" name="image" class="search">
        <input type="submit" value="отправить" class="search">
    </form>

    <?php
    require __DIR__ . '/classes/DataBase.php';
    $dsn = 'mysql:host=127.0.0.1;dbname=bookshop';
    $database = new DataBase($dsn, 'root', '');

    if (!empty($_POST['title'])) {
        $database->addBook($_POST['title'], $_POST['author'], $_POST['description'], $_POST['price'], $_POST['image']);
    }
    ?>
</body>

</html>