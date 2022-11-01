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

    //toimii melkein, aika on 2h myöhässä
        //aika
        $a = date("H");

        echo "<p>Kello on $a</p><br>";

        if ($a == "0") {            
            echo "Hyvää yötä";
        } elseif ($a < "6") {
            echo "Hyvää yötä";
        } elseif ($a < "10") {
            echo "Hyvää huomenta";               
        } elseif ($a < "12") {
            echo "Hyvää aamupäivää";          
        } elseif ($a < "14"){
            echo "Hyvää päivää";
        } elseif ($a < "18") {
            echo "Hyvää iltapäivää";
        } elseif ($a < "23") {
            echo "Hyvää iltaa";
        } else {
            echo "Hyvää yötä";
        }
        
        

    ?>
</body>
</html>