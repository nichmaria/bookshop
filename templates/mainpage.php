<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="templates\style.css">
</head>

<body>
    <h2 align="center">BEST BOOKSHOP</h2>

    <div class="containeritem">
        <?php foreach ($data['books'] as $book) { ?>
            <div class="item">
                <img src="<?php echo $book['image']; ?>" alt="kitten" width="230px">
                <?php
                echo '<a href="secondpage.php?id=' . $book['id'] . '">' . $book['title'] . '</a>';
                echo "<br>";
                echo $book['author'];
                echo "<br>";
                echo $book['price'];
                ?>
            </div>
        <?php } ?>
    </div>

</body>

</html>