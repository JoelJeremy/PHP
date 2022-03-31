<!DOCTYPE html>
<html lang="en">

<head>
    <title> Zwemclubs </title>

    <style>
        table, tr, td {
            border: solid 1px white;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
        }
        td.border {
            border: solid 2px grey;
        }
    </style>
</head>

<body>

<?php

$zwemclubs = [
        "De spartelkuikens" => 25,
        "De waterbuffels" => 32,
        "Plonsjederin" => 11,
        "Bommetje" => 23
];

echo '<table>';

foreach ($zwemclubs as $clubname => $membercount) {
    echo '<tr>';
    echo '<td class="border">' .$clubname. '</td>';
    echo '<td class="border">' . $membercount . '</td>';
    $img_amount = floor($membercount / 5);
    echo '<td>';
    for($i = 0; $i < $img_amount; $i++) {
        echo '<img src="phpimages/auto1.jpg" alt="ferrari" >';
    }
    echo '</td>';
    echo '</tr>';
}

echo '</table>';

?>

</body>
</html>



