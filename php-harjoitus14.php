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
        $b = 1;

        do {
            echo($b++ * 5);
            echo "<br>";
        } while ($b <= 10);
    ?>
</body>
</html>