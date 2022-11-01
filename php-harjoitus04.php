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
        //muuttujat
        $x = 3;
        $y = 6;

        //pluslasku
        $plus = $x + $y;
        //miinuslasku
        $miinus = $x - $y;
        //jakolasku
        $jako = $x / $y;
        //kertolasku
        $kerto = $x * $y;
        //jakojäännös
        $jakoj = fmod($x, $y);

        //tulokset
        print "<p>$x + $y = $plus</p>";
        print "<p>$x - $y = $miinus</p>";
        print "<p>$x / $y = $jako</p>";
        print "<p>$x * $y = $kerto</p>";
        print "<p>$x ja $y jakojäännös = $jakoj</p>";
    ?>

</body>
</html>