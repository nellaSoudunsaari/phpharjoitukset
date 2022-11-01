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
        // ohjelma saatiin palauttamaan true/false jo edellisessä tehtävässä var_dump-avulla
        // tää on toinen tapa

        $x = 5;
        $y = 8;

        $a = $x != $y;
        $b = $x == $y;
        $c = $x === $y;
        $d = $x < $y;
        $e = $x > $y;

        if ($a == 1) {
            print ("<p>tosi</p>");
        }
        else {
            print("<p>epätosi</p>");
        }

        if ($b == 1) {
            print ("<p>tosi</p>");
        }
        else {
            print("<p>epätosi</p>");
        }

        if ($c == 1) {
            print ("<p>tosi</p>");
        }
        else {
            print("<p>epätosi</p>");
        }

        if ($d == 1) {
            print ("<p>tosi</p>");
        }
        else {
            print("<p>epätosi</p>");
        }

        if ($e == 1) {
            print ("<p>tosi</p>");
        }
        else {
            print("<p>epätosi</p>");
        }
    ?>
</body>
</html>