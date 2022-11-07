<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 5;
        $y = 8;

        //tosi/epätosi
        echo "$x === $y = ", var_dump($x === $y), "<br>";
        echo "$x == $y = ", var_dump($x == $y), "<br>";
        echo "$x != $y = ", var_dump($x != $y), "<br>";
        echo "$x < $y = ", var_dump($x < $y), "<br>";
        echo "$y < $x = ", var_dump($y < $x), "<br>";
    ?>
</body>
</html>