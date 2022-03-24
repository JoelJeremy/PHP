<!DOCTYPE html>
<html lang="en" >

<head>
<title> opdracht boom </title>
    <style>
    div#kerstboom {
        text-align: center;
    }
   </style>
</head>
<body>
<div id="kerstboom">

<?php

for ($i = 1; $i <= 9; $i++) {

    echo '<div class= "row">';
    for($j = 0; $j < $i; $j++) {
        echo '*';
    }
    echo "</div>\n";
}

?>

</div>

</body>
</html>