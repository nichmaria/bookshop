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
            background-color: #FFF5EE;
        }


        .item {
            padding: 20px;
            background: #FFDAB9;
            border: 4px solid #BC8F8F;
            width: 250px;
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