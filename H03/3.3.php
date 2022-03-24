<?php

for($i = 1; $i <= 9; $i++) {
     echo "<img src='phpimages/auto".$i.".jpg'>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title> opdracht groen rood</title>
    <style>
        body {
            text-align: center
        }

        .rood {
            border: red solid 5px;
        }

        .groen {
            border: solid green 5px;
        }
    </style>
</head>
<body>
<?php
$class = "";
for($i = 0; $i <= 9; $i++) {
    if($i % 2 == 0) {
        $class ="class = 'rood'";
    } else{
        $class = "class = 'groen'";
    }
    echo "<img".$class. "src ='phpimages/auto".$i.".jpg'>";
}
?>
</body>
</html>
