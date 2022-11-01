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
        $y = 5;
        $z = 5;
        $ä = 5;

        //operaattorit
        $a = ++$x;
        $b = $y++;
        $c = --$z;
        $d = $ä--;

        //operaattoreiden tulokset
        print "<p>$a</p>";
        print "<p>$b</p>";
        print "<p>$c</p>";
        print "<p>$d</p>";
    ?>
</body>
</html>