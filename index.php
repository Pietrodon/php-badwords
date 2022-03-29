<?php

// $name = 'Pietro';

$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsum suscipit quod quibusdam quo. Atque molestias adipisci consectetur! Corporis accusantium officia pariatur magnam. Repellendus, ratione perferendis officia culpa ad nobis.';
$lunghezza = strlen($text);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php echo $text ?>
    </p>
    <h1>
        Il testo è lungo <?php echo $lunghezza ?> caratteri
    </h1>
</body>
</html>