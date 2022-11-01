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
        // muuttujat
        $otsikko = "Painoindeksin laskeminen";
        $etunimi = "Ukko";
        $sukunimi = "Ylijumala";
        $ika = 52;
        $paino = 85;
        $pituus = 1.80;

        // laskutoimitus ja tuloksen pyöristys
        $bmi1 = $paino / ($pituus ** 2);
        $bmi2 = round($bmi1, 1);

        // teksti ja painoindeksin tulostus
        echo "<h1>$otsikko</h1>";
        echo "<p>Tervetuloa, $etunimi $sukunimi</p>";
        echo "<p>Painosi on $paino kg ja pituutesi on $pituus m.</p>";
        echo "<p>Painoindeksisi on $bmi2.</p>"
    ?>
</body>
</html>