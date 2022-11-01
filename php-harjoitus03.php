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
        $vaihtuvaTyyppi = 3.14;
        //print(gettype($vaihtuvaTyyppi));
        //print(settype($vaihtuvaTyyppi, "integer")); #tulos on 3
        //print(settype($vaihtuvaTyyppi, "string")); #tulos on 3.14
        //print(settype($vaihtuvaTyyppi, "double")); #tulos on 3.14
        //print(settype($vaihtuvaTyyppi, "boolean")); #tulos on 1
        echo "<p>$vaihtuvaTyyppi</p>";
    ?>
</body>
</html>