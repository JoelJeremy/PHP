<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset=" UTF-8">
    <title> Bus-trip </title>
</head>

    <body>

    </body>
</html>

<?php

define("Fare", 10);
define("Senior_age",65);
define("Senior_discount",50);
define("Junior_age",12);
define("Junior_discount",50);
define("Kids_age",3);
define("Kids_discount",100);

for ($i = 0; $i <= 80; $i++) {
    $age = $i;

    if ($age >= Senior_age) {
        $price = Fare * ((100 - Senior_discount) / 100);
    } else if ($age < Kids_age) {
        $price = Fare * ((100 - Kids_discount) / 100);
    } else if ($age <= Junior_age) {
        $price = Fare * ((100 - Junior_discount) / 100);
    } else {
        $price = Fare;
    }
    echo ' Iemand van ' . $age . ' betaald ' . $price . ' euro <br> ';
}

?>