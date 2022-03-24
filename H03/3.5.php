<!DOCTYPE html>

<html lang="en">
<head>
<meta charset=" UTF-8">
    <title> van while naar for-loop </title>
</head>

<body>

<?php

echo "<h1> Hier begint de while loop </h1>";
echo "<p> Een while loop gebruik je als je niet van te voren kunt weten hoeveel herhalimgen je wilt
(dit is afhankelijk van een extern gegeven).</p>"
;
$x = 35;
while  ($x >= 25) {
    echo "samsung ";
    $x--;
}

echo "<h1> Hier begint de for loop </h1>";
echo "<p> Een voorloop gebruik je als je exact weet hoeveel herhalingen je wilt </p> ";

for( $i = 35; $i >= 25; $i--) {
    echo"s22ultra ";
}
?>

</body>
</html>
