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
        $a = array(
            array("audi"), 
            array("bmw"), 
            array("citroën"), 
            array("ford", "focus"), 
            array("honda"));
 

        echo $a [0][0], "<br>";
        echo $a [1][0], "<br>";
        echo $a [2][0], "<br>";
        echo $a [3][0], $a[3][1], "<br>";
        echo $a [4][0], "<br>";
        echo count($a);
    ?>
</body>
</html>