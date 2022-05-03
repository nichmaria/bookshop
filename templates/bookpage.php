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
    <img src="<?php echo $data['book']['image']; ?>" alt="kitten" class="image">
    <h2><?php echo $data['book']['title']; ?> </h2>
    <h3><?php echo $data['book']['author']; ?> </h3>
    <div class="containerinfo">
        <div class="info">
            <p><b>Описание:</b></p>
            <p><?php echo $data['book']['description']; ?></p>
        </div>
        <div class="info">
            <p><b>Отзывы:</b></p>
            <p>
                <?php foreach ($data['feedback'] as $onerecord) {
                    echo "<b>" . $onerecord['name'] . "</b>";
                    echo "<br>";
                    echo  $onerecord['opinion'];
                    echo "<br>";
                } ?>
            </p>
            <p>
            <form action="secondpage.php?id=<?php echo $data['book']['id']; ?>" method="post">
                <input type="string" name="name" class="search">
                <input type="string" name="comment" class="search">
                <input type="submit" value="отправить" class="search">
            </form>
            </p>
        </div>
    </div>



</body>

</html>