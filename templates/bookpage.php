<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #FFF5EE;
        }

        img {
            width: 250px;
            float: left;
            padding-right: 50px;
            padding-bottom: 10px;
            position: relative;
        }

        .item {
            padding: 20px;
            background: #FFDAB9;
            border: 4px solid #BC8F8F;
            margin: 2px;
            padding: 5px;
            display: inline-block;
            border-radius: 10px;
            max-width: 450px;
        }

        .feedback {
            padding: 20px;
            background: #FFDAB9;
            border: 4px solid #BC8F8F;
            margin: 2px;
            padding: 5px;

            border-radius: 10px;
            max-width: 450px;
        }
    </style>
</head>

<body>
    <img src="<?php echo $data['book']['image']; ?>" alt="kitten">
    <h2><?php echo $data['book']['title']; ?> </h2>
    <h3><?php echo $data['book']['author']; ?> </h3>
    <div class="item">
        <p><b>Описание:</b></p>
        <p><?php echo $data['book']['description']; ?></p>
    </div>
    <div class="feedback">
        <p><b>Отзывы:</b></p>
        <p><?php
            foreach ($data['feedback'] as $oneperson) {
                foreach ($oneperson as $text) {
                    echo $text;
                    echo "<br>";
                }
            }


            ?></p>
    </div>

</body>

</html>