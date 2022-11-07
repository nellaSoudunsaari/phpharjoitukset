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
        function naytaViesti() {
            echo "Hei funktiosta <br>";
        }

        naytaViesti();

        function omaNimi($enimi){
            echo "Hei $enimi";
        }

        omaNimi("Nella");
    ?>
</body>
</html>