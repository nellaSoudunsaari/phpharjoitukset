<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- H 1-3 -->
    <p>
        Tämä tulee HTML:stä!
    <br>
    <br>
    <?php
        // tulostaa lauseen Hello World
        print "Tämä tulee PHP:stä!";
    ?>
    </p>

    <?php 
        echo "Hello World";
    ?>

    <!-- H4 -->

    <?php 
        $otsikko = "Tekstiä";
        $luku1 = 2;
        $luku2 = 5;
    ?>

    <h1>
        <?php 
         echo "<p>Tässä on $otsikko <p> "
        ?>
    </h1>

    <p> 
        <?php 
            echo $luku1 * $luku2;
        ?>
    </p>

</body>
</html>