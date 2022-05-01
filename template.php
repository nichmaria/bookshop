<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        body,
        html {
            margin: 0;
            width: 100%;
            height: 100%;
            padding: 0;
        }

        .item {
            padding: 20px;
            /* Поля */
            background: #F8F8FF;
            /* Цвет фона */
            border: 2px solid #DDA0DD;
            /* Параметры рамки */
            width: 200px;

            margin: 40px;
        }

        .container {
            margin: auto;
            width: 100%;
            max-width: 1280px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .search {
            background: #F8F8FF;

        }
    </style>
</head>

<body>
    <h2 align="center">BEST BOOKSHOP</h2>
    <p>
    <form action="index.php" method="post" align="center">
        <input type="string" name="in" class="search">
        <input type="submit" value="search" class="search">
    </form>
    </p>

    <div class="container">
        <?php foreach ($booksinfo as $number) { ?>
            <div class="item">
                <img src="<?php echo $number['image']; ?>" alt="kitten" width="190px">
                <?php
                echo $number['title'];
                echo "<br>";
                echo $number['author'];
                ?>
            </div>
        <?php } ?>
    </div>

</body>

</html>