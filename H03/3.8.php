<!DOCTYPE html>
<html lang="en">

<head>
    <title> Kapperzaak Sanders </title>
</head>
<body>

<?php

    $barberagenda = [
        "9:15"  => "Mevr. Pietersen",
        "9:30"  => "Mevr. Willems",
        "9:45"  => "",
        "10:00" => "Paul van den Broek",
        "10:15" => "Karel de Meeuw",
        "10:30" => ""
];

    print("De volgende momenten zijn nog beschikbaar:<ul>");
        foreach($barberagenda as $time => $appointment) {
            if ($appointment == "") {
                print("<li>" . $time . "</li>");
                }
            }
    ?>
</body>
</html>
