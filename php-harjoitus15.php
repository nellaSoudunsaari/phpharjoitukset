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
        $t = date("H");

        switch ($t) {
            case $t < 6:
                echo "Hyvää yötä";
                break;
            case $t < 11:
                echo "Hyvää huomenta";
                break;
            case $t < 16:
                echo "Hyvää päivää";
                break;
            case $t < 22:
                echo "Hyvää iltaa";
                break;
            default:
                echo "Hyvää yötä";
            }


    ?>
</body>
</html>