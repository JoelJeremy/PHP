<!DOCTYPE html>
<html lang="en">
<head>
    <title> H4.1: Van Celsius naar Fahrenheit </title>
</head>

<body>
<?php



for( $i = -10; $i <= 40; $i++) {
    CalculateFahrenheitFromCelsius($i);
}

function CalculateFahrenheitFromCelsius($celsius) {
    $fahrenheit = $celsius * 1.8 + 32;
    echo "{$celsius} degrees celsius amounts to {$fahrenheit} degrees Fahrenheit.<br>";
}

?>
</body>
</html>